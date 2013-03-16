<?php
 
/**
 * myValidatorUrl validates and sanitizes a URL.
 *
 * @author Jason Swett (http://jasonswett.net/how-to-validate-and-sanitize-a-url-in-symfony)
 */
class myUrlValidator extends sfValidatorString
{
  protected function doClean($value)
  {
    $clean = (string) $value;
 
    $allowed = '';

	$regex = "([a-z0-9A-Z_]{1,63})+";
	    
    if (preg_match($regex, $clean) )
    {
      throw new sfValidatorError($this, 'invalid', array('value' => $value));
    }
 
    return $clean;
  }
}