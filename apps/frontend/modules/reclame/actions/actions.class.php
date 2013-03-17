<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * reclame actions.
 *
 * @package    cmatis
 * @subpackage reclame
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reclameActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->forward404Unless($this->getUser()->isAuthenticated());
      $this->reclams = Doctrine::getTable('Reclame')->findAll();
  }
  
  public function executeEdit(sfWebRequest $request)
  {
      $this->forward404If(!$this->getUser()->isAuthenticated());
      $this->recl = Doctrine::getTable('Reclame')->find($request->getParameter('id'));
      $this->forward404Unless($this->recl);
      $this->form = new ReclameForm($this->recl);
      
      if ( $request->isMethod('POST') ) {
          
        $this->form->bind($request->getParameter($this->form->getName())); 
        if ($this->form->isValid()) {
            $cat = $this->form->save();            
            $this->getUser()->setFlash('success', __('reclame_changed'));

            $this->redirect('@reclame');
        } 
      }
  }
  
}
