<?

class MenuBinding extends CUserTypeString
{   
    protected static $headerSet = 0;
    function GetUserTypeDescription()
    {
        return array(
                "PROPERTY_TYPE " => "S",
                "BASE_TYPE" => "string",
                "USER_TYPE" => "M",
                "DESCRIPTION" => 'Привязка к меню',
                "CLASS_NAME" => "MenuBinding",
                "GetPropertyFieldHtml" => array("MenuBinding","GetPropertyFieldHtml"),
                "GetAdminListViewHTML" => array("MenuBinding","GetAdminListViewHTML"),
                "ConvertToDB" => array("MenuBinding","ConvertToDB"),
                "ConvertFromDB" => array("MenuBinding","ConvertFromDB"),
        );
    }

    //отображение формы редактирования в админке и в режиме правки
    function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        ob_start();

        $arMenuTypes=GetMenuTypes();
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
                             <option value="">Выберите тип меню</option>
                             <?if(!empty($arMenuTypes)):?>
                                <?foreach($arMenuTypes as $key => $menuType):?>
                                    <option value="<?=$key?>" <?if($value["VALUE"] == $key):?>selected<?endif;?>><?=$menuType?></option>
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
 
        return 'Привязка к меню';
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