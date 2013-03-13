<?php

/**
 * Description of myClass
 *
 * @author bulgakows
 */
class myClass {
    
    public static function makeUrl($str)
    {
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', self::translit($str));
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", '_', $clean);

        return trim($clean, '_');
    }
    
    
    public static function translit($str) 
    { 
        
        $trans_table_ru = array(
            'А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 
            'Ж', 'ж', 'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 
            'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р', 'С', 'с', 'Т', 'т', 'У', 'у', 
            'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ы', 'ы', 'Э', 'э', 'Ч', 'ч', 'Ш', 'ш', 
            'Щ', 'щ', 'Ю', 'ю', 'Я', 'я'
        );

        $trans_table_lat = array(
            'A', 'a', 'B', 'b', 'V', 'v', 'G', 'g', 'D', 'd', 'E', 'e', 'E', 'e', 
            'J', 'j', 'Z', 'z', 'I', 'i', 'Y', 'y', 'K', 'k', 'L', 'l', 'M', 'm', 
            'N', 'n', 'O', 'o', 'P', 'p', 'R', 'r', 'S', 's', 'T', 't', 'U', 'u', 
            'F', 'f', 'H', 'h', 'C', 'c', 'I', 'i', 'E', 'e',
            'Ch', 'ch', 'Sh', 'sh', 'Sh', 'sh', 'Yu', 'yu', 'Ya', 'ya'
        );
        
        $str = str_replace(" ", "_", $str);
        $str = preg_replace('/W|Ь|ь|Ъ|ъ/i', '', $str);
        $str = preg_replace('/_+/', '_', $str);
        $str = trim($str, "_");
        $str = str_replace($trans_table_ru, $trans_table_lat, $str);
        $str = strtolower($str);
        return $str;
    }
    
    
    
//    public static function translit($string) {
//        $rus = array('ё','ж','ц','ч','ш','щ','ю','я','Ё','Ж','Ц','Ч','Ш','Щ','Ю','Я');
//        $lat = array('yo','zh','tc','ch','sh','sh','yu','ya','YO','ZH','TC','CH','SH','SH','YU','YA');
//        $string = str_replace($rus, $lat , $string);
//        // остальной алфавит:
//        $string = strtr($string,
//            "АБВГДЕЗИЙКЛМНОПРСТУФХЪЫЬЭабвгдезийклмнопрстуфхъыьэ ",
//            "ABVGDEZIJKLMNOPRSTUFH_I_Eabvgdezijklmnoprstufh_i_e_");
//        return(trim($string, '_'));
//    }
    
}

?>
