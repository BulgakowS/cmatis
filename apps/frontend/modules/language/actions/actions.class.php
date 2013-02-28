<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * language actions.
 *
 * @package    cmatis
 * @subpackage language
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class languageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    public function executeIndex(sfWebRequest $request)
    {
        
    }
  
    public function executeChangeLanguage(sfWebRequest $request)
    {
      $url = '@localized_homepage';
      if ( $request->hasParameter('language') ) {
          $old = $this->getUser()->getCulture();  
          $new = $request->getParameter('language');
          $this->getUser()->setCulture($new);
          if ($url = $request->getReferer())
            $url = str_replace('/'.$old.'/', '/'.$new.'/', $url );           
      } 
      $user = $this->getUser();
      $user->setFlash('error', $user->getFlash('error'));
      $user->setFlash('success', $user->getFlash('success'));
      
      return $this->redirect($url);
    }
}
