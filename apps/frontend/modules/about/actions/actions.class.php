<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * about actions.
 *
 * @package    cmatis
 * @subpackage about
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aboutActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->about = AboutTable::getAbout();
      $this->redirectIf(!$this->about, '@homepage');
  }
  
  public function executeEdit(sfWebRequest $request)
  {
      $this->forward404If(!$this->getUser()->hasCredential('admin'));
      $about = AboutTable::getAbout();
      
      $this->form = new AboutForm($about);
      
      if ( $request->isMethod('POST') ) {
          
        $this->form->bind($request->getParameter($this->form->getName())); 
        if ($this->form->isValid()) {
            $this->form->save();
            
            $this->getUser()->setFlash('success', __('info_saved'));
            
            $this->redirect('@about');
        } 
      }
  }
}
