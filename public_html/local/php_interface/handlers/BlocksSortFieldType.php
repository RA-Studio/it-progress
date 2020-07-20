<?

class BlocksSort extends CUserTypeString
{   
    protected static $headerSet = 0;

    public function GetTemplate($template, $component){

        include $template.'/.description.php';
        /** @var array $arTemplateDescription*/
        return  [end(explode('/',$template)) =>  array_merge($arTemplateDescription, ['COMPONENT'=>$component]) ]  ;
    }

    function GetUserTypeDescription()
    {
        return array(
                "PROPERTY_TYPE " => "S",
                "BASE_TYPE" => "string",
                "USER_TYPE" => "CS",
                "DESCRIPTION" => 'Порядок блоков',
                "CLASS_NAME" => "BlocksSort",
                "GetPropertyFieldHtml" => array("BlocksSort","GetPropertyFieldHtml"),
                "GetAdminListViewHTML" => array("BlocksSort","GetAdminListViewHTML"),
                "ConvertToDB" => array("BlocksSort","ConvertToDB"),
                "ConvertFromDB" => array("BlocksSort","ConvertFromDB"),
        );
    }

    //отображение формы редактирования в админке и в режиме правки
    function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        ob_start();
        $arAllowedBlocks = [];
        $arBlocksTemplates = [];
        $IBLOCK_ID = isset($_POST['PARAMS']['IBLOCK_ID'])?$_POST['PARAMS']['IBLOCK_ID']:$_GET['IBLOCK_ID'];
        $properties = CIBlockProperty::GetList(Array("sort"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$IBLOCK_ID, "CODE"=>'UF_BLOCK%'));
        while ($prop_fields = $properties->GetNext())
        {
            $arBlocksTemplates[$prop_fields['ID']] = [];
            $arAllowedBlocks[$prop_fields['CODE']] = ["ID"=>$prop_fields['ID'],"NAME" => $prop_fields['NAME'], "ANCHOR"=> strtolower($prop_fields['CODE'])];
            if (($prop_fields['MULTIPLE'] == 'Y' && ($prop_fields['PROPERTY_TYPE'] != 'S' || $prop_fields['PROPERTY_TYPE'] == 'E')) || $prop_fields['PROPERTY_TYPE'] == 'G' || $prop_fields['USER_TYPE'] == 'IB'){
                $templates = glob($_SERVER['DOCUMENT_ROOT'].'/local/templates/itp/components/rastudio/news.list/block_*');
                foreach ($templates as $template){
                    $arBlocksTemplates[$prop_fields['ID']] += BlocksSort::GetTemplate($template,"rastudio:news.list");
                }
            }elseif ($prop_fields['USER_TYPE'] == 'FS'){
                $templates = glob($_SERVER['DOCUMENT_ROOT'].'/local/templates/itp/components/slam/easyform/block_*');
                foreach ($templates as $template){
                    $arBlocksTemplates[$prop_fields['ID']] += BlocksSort::GetTemplate($template, "slam:easyform");

                }
            }elseif ($prop_fields['USER_TYPE'] == 'M'){
                $templates = glob($_SERVER['DOCUMENT_ROOT'].'/local/templates/itp/components/bitrix/menu/block_*');
                foreach ($templates as $template){
                    $arBlocksTemplates[$prop_fields['ID']] += BlocksSort::GetTemplate($template, "bitrix:menu");

                }
            }else{
                $templates = glob($_SERVER['DOCUMENT_ROOT'].'/local/templates/itp/components/rastudio/main.include/block_*');
                foreach ($templates as $template){
                    $arBlocksTemplates[$prop_fields['ID']] += BlocksSort::GetTemplate($template,"rastudio:main.include");

                }
            }
        }
        asort($arAllowedBlocks);

       ?>
            <style>
            .sort-blocks-table td, .sort-blocks-table input
            {
                text-align:center;
            }
            .sort-blocks-table tr.header
            {
                display:none;
            }
            .nav-anchors
            {
                padding-left: 10px !important;
                text-align:left  !important;
            }
            </style>
            <table class="sort-blocks-table">
                <tr class="header" <?if(!self::$headerSet):?>style="display:table-row"<?endif;?>>
                    <td>Название блока</td>
                    <td>Шаблон</td>
                    <td>Сортировка</td>
                    <td class="nav-anchors">Якорь</td>
                </tr>
                <tr>
                    <?//название блока?>
                    <td>
                        <select class="block-select" name="<?=$strHTMLControlName["VALUE"]?>[BLOCK]?>">
                             <option value="">выберите блок</option>
                             <?if(!empty($arAllowedBlocks)):?>
                                <?foreach($arAllowedBlocks as $strBlockCode => $arBlock):?>
                                    <option value="<?=$strBlockCode?>" data-property="<?=$arBlock['ID']?>" <?if($value["VALUE"]["BLOCK"] == $strBlockCode):?>selected<?endif;?>><?=$arBlock["NAME"]?></option>
                                <?endforeach;?>
                             <?endif;?>
                         </select>

                    </td>
                    <?//шаблон?>
                    <td>
                        <select name="<?=$strHTMLControlName["VALUE"]?>[TEMPLATE]?>">
                            <option value="">выберите шаблон</option>
                            <?if(!empty($arAllowedBlocks)):?>
                                <?foreach($arBlocksTemplates as $propertyId => $arBlocksTemplate):?>
                                    <?foreach ($arBlocksTemplate as $template=>$templateData){?>
                                        <?/* при добавлении множественных полей
                                                <option value='<?=serialize(["TEMPLATE_NAME"=>$template, "COMPONENT"=>$templateData['COMPONENT']])?>' data-propertyId="<?=$propertyId?>" <?if( $value["VALUE"]["TEMPLATE"]['TEMPLATE_NAME'] == $template):?>selected <?else:?> style="display: none" <?endif;?>><?=$templateData["NAME"]?></option>
                                        */?>
                                        <option value='<?=$template?>' data-propertyId="<?=$propertyId?>" <?if( $value["VALUE"]["TEMPLATE"] == $template):?>selected <?else:?> style="display: none" <?endif;?>><?=$templateData["NAME"]?></option>
                                    <?}?>
                                <?endforeach;?>
                            <?endif;?>
                        </select>
                    </td>
                    <?//сортировка?>
                    <td>
                        <input type="text" size="10" name="<?=$strHTMLControlName["VALUE"]?>[SORT]" value="<?=$value["VALUE"]["SORT"]?>">
                    </td>
                    <?//якорь?>
                    <td class="nav-anchors">
                        <input type="text" size="10" disabled name="<?=$strHTMLControlName["VALUE"]?>[ANCHOR]" value="<?=$arAllowedBlocks[$value["VALUE"]["BLOCK"]]['ANCHOR']?>">
                        <?//=$arAllowedBlocks[$value["VALUE"]["BLOCK"]]["ANCHOR"]?>
                    </td>
                </tr>
            </table>
            <script>
                BX.ready(function() {
                        var selectList = document.querySelectorAll('.block-select');
                        selectList.forEach(function(select) {
                            select.addEventListener('change', function (element) {
                                var propetyId = element.target.options[element.target.selectedIndex].getAttribute('data-property');
                                console.log();
                                var options = element.target.parentNode.nextSibling.nextSibling.querySelectorAll('[data-propertyid]');
                                options.forEach(function (option) {
                                    option.style.display = "none";
                                });
                                var options = element.target.parentNode.nextSibling.nextSibling.querySelectorAll('[data-propertyid="'+propetyId+'"]');
                                options.forEach(function (option) {
                                    option.style.display = "block";
                                });
                            });
                        });
                });
            </script>
        <?
        self::$headerSet = 1;
        $return = ob_get_contents();
        ob_end_clean();
        return  $return;        
    }



    /*
     * GetAdminListViewHTML
     * Показ в списке
     *
     * @param array $arProperty Метаданные свойства
     * @param array $value      Значение свойства
     * @param array $strHTMLControlName Имена элементов управления для заполнения значения свойства и его описания
     *
     * @return string строка html
     */
    function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName) {
 
        return 'Порядок блоков';
    }

    //Сохранение в БД
    //Тут важно проверить, все ли нужные нам значения массива $value["VALUE"] пришли
    //Если не все, то возвращаем false, и тогда Битрикс удалит этот не полностью заполненный вариант значения
    function ConvertToDB($arProperty, $value)
    {
       $return = false;
       
       if(!empty($value["VALUE"]["BLOCK"]) && !empty($value["VALUE"]["SORT"]))
       {
           /*при добавлении множественных полей
           if (!empty($value['VALUE']['TEMPLATE']) && is_array($value['VALUE']['TEMPLATE'])){
               $value['VALUE']['TEMPLATE'] = serialize($value['VALUE']['TEMPLATE']);
           }*/
           $value["VALUE"] = serialize($value["VALUE"]);

           if(is_array($value)&& array_key_exists("VALUE", $value))
           {
              $return = array("VALUE" => serialize($value["VALUE"]),);
              if(strlen(trim($value["DESCRIPTION"])) > 0)$return["DESCRIPTION"] = trim($value["DESCRIPTION"]);
           }
       }

       return $return; 
    }

    //Извлечение из БД
    function ConvertFromDB($arProperty, $value)
    {
       $return = false;

       if(!is_array($value["VALUE"]) && !empty($value["VALUE"]))
       {
          $return = array("VALUE" => unserialize($value["VALUE"]));

          if($value["DESCRIPTION"])$return["DESCRIPTION"] = trim($value["DESCRIPTION"]);
       }

       $return["VALUE"] = unserialize($return["VALUE"]);
        /*при добавлении множественных полей
       $return['VALUE']['TEMPLATE'] = unserialize($return['VALUE']['TEMPLATE']);*/
       return $return;
    }

}
?>