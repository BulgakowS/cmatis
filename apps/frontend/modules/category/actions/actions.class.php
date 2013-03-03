<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * category actions.
 *
 * @package    cmatis
 * @subpackage category
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->cat = Doctrine_Core::getTable('Category')->findOneByUrl($request->getParameter('category'));
      $this->forward404If(!$this->cat);
      $this->subCats = $this->cat->getNode()->getChildren();
      $this->articles = $this->cat->getArticle();
  }
  
  public function executeAdd(sfWebRequest $request)
  {
      $this->form = new CategoryForm();
      
      if ( $request->isMethod('POST') ) {
          
        $this->form->bind($request->getParameter($this->form->getName())); 
        if ($this->form->isValid()) {
            $cat = $this->form->save();            
            $this->getUser()->setFlash('success', __('category_added'));

            $this->redirect('@homepage');
        } 
      }
  }
  
  public function executeEdit(sfWebRequest $request)
  {     
      $this->forward404If(!$request->hasParameter('url'));
      
      $cat = Doctrine_Core::getTable('Category')->findOneByUrl($request->getParameter('url'));
      $this->forward404If(!$cat);
      
      $this->cat = $cat;
      $this->form = new CategoryForm($cat);
      
      if ( $request->isMethod('POST') ) {
          
        $this->form->bind($request->getParameter($this->form->getName())); 
        if ($this->form->isValid()) {
            $cat = $this->form->save();
            
            $this->getUser()->setFlash('success', __('changed_saved'));
            
            $this->redirect('@homepage');
        } 
      }
  }
  
}
