<?

class IBlockBinding extends CUserTypeString
{   
    protected static $headerSet = 0;
    function GetUserTypeDescription()
    {
        return array(
                "PROPERTY_TYPE " => "S",
                "BASE_TYPE" => "string",
                "USER_TYPE" => "IB",
                "DESCRIPTION" => 'Привязка к инфоблоку',
                "CLASS_NAME" => "IBlockBinding",
                "GetPropertyFieldHtml" => array("IBlockBinding","GetPropertyFieldHtml"),
                "GetAdminListViewHTML" => array("IBlockBinding","GetAdminListViewHTML"),
                "ConvertToDB" => array("IBlockBinding","ConvertToDB"),
                "ConvertFromDB" => array("IBlockBinding","ConvertFromDB"),
        );
    }

    //отображение формы редактирования в админке и в режиме правки
    function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        ob_start();
        $arAllowedBlocks = [];
        $IBLOCKS = CIBlock::GetList(Array(), Array(), false);
        while($IBLOCK = $IBLOCKS->Fetch())
        {
            $arAllowedBlocks[$IBLOCK['ID']] = ["NAME"=>$IBLOCK['NAME']];
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
                <tr>
                    <td>
                        <select name="<?=$strHTMLControlName["VALUE"]?>?>">
                             <option value="">выберите инфоблок</option>
                             <?if(!empty($arAllowedBlocks)):?>
                                <?foreach($arAllowedBlocks as $strBlockId => $arBlock):?>
                                    <option value="<?=$strBlockId?>" <?if($value["VALUE"] == $strBlockId):?>selected<?endif;?>><?=$arBlock["NAME"]?></option>
                                <?endforeach;?>
                             <?endif;?>
                         </select>

                    </td>
                </tr>
            </table>
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
 
        return 'Привязка к инфоблокам';
    }

    //Сохранение в БД
    //Тут важно проверить, все ли нужные нам значения массива $value["VALUE"] пришли
    //Если не все, то возвращаем false, и тогда Битрикс удалит этот не полностью заполненный вариант значения
    function ConvertToDB($arProperty, $value)
    {
       $return = false;
       
       if(!empty($value["VALUE"]))
       {
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
       return $return;
    }

}
?>