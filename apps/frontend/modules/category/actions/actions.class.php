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
      $this->cat = CategoryTable::getByUrlForShow($request->getParameter('category'));
      $this->forward404Unless($this->cat);
      $t = $this->cat->getName();
      $this->forward404If( empty($t) );
      $this->subCats = $this->cat->getSubs();
      $this->articles = $this->cat->getArticle();
      $this->after_descr_reclame = Doctrine::getTable('Reclame')->findOneByPosition(4);
      $response = $this->getResponse();
      $response->addMeta('title', $this->cat->getName() . ' - Cmatis'  );
      $t = $this->cat->getTags() ? $this->cat->getTags() : $this->cat->getName();
      $response->addMeta('keywords', $t);
  }
  
  public function executeAdd(sfWebRequest $request)
  {
      $this->forward404If(!$this->getUser()->isAuthenticated());
      $this->form = new CategoryForm();
      
      if ( $request->isMethod('POST') ) {
          
        $this->form->bind($request->getParameter($this->form->getName())); 
        if ($this->form->isValid()) {
            $cat = $this->form->save();            
            $this->getUser()->setFlash('success', __('category_added'));

            $this->redirect('@category?category='.$cat->getUrl());
        } 
      }
  }
  
  public function executeEdit(sfWebRequest $request)
  {     
      $this->forward404If(!$this->getUser()->isAuthenticated());
      $this->forward404If(!$request->hasParameter('url'));
      
      $cat = CategoryTable::getByUrl($request->getParameter('url'));
      $this->forward404If(!$cat);
      
      $this->cat = $cat;
      $this->form = new CategoryForm($cat);
      
      if ( $request->isMethod('POST') ) {
          
        $this->form->bind($request->getParameter($this->form->getName())); 
        if ($this->form->isValid()) {
            $cat = $this->form->save();
            
            $this->getUser()->setFlash('success', __('changed_saved'));
            
            $this->redirect('@category?category='.$cat->getUrl());
        } 
      }
  }
  
  public function executeDelete(sfWebRequest $request)
  {     
      $this->forward404If(!$this->getUser()->isAuthenticated());
      $this->forward404If(!$request->hasParameter('url'));
      
      $cat = CategoryTable::getByUrl($request->getParameter('url'));
      $this->forward404If(!$cat);
      
      if ( $cat->getChieldscount() > 0 || count($cat->getArticle()) > 0  ) {
          $this->getUser()->setFlash('error', __('category_deleted_with_chields'));
          $this->redirect('@category?category='.$cat->getUrl());
          
//          foreach ( $cat->getSubs() as $sc ) {
//              $sc->setParentId( $cat->getParentId() );
//              $sc->save();
//          }
      }
      
      $cat->delete();
      
      $this->getUser()->setFlash('success', __('category_deleted'));
      $this->redirect('@homepage');
      $this->setTemplate(false);
  }
}
