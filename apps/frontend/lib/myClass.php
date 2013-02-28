<?php

/**
 * Description of myClass
 *
 * @author bulgakows
 */
class myClass {
    
    public static function makeUrl($str)
    {
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", '_', $clean);

	return trim($clean, '_');
    }
}

?>
