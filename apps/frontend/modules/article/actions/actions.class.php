<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * article actions.
 *
 * @package    cmatis
 * @subpackage article
 * @author     BulgakowS <bulgakows@gmail.com>
 */
class articleActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $article = Doctrine_Core::getTable('Article')->findOneByUrl($request->getParameter('url'));
      $this->forward404If(!$article);
      $article->setViews( $article->getViews() + 1 );
      $article->save();
      $this->article = $article;
  }
  
  public function executeEdit(sfWebRequest $request)
  {
     $article = Doctrine_Core::getTable('article')->findOneByUrl($request->getParameter('url'));
     $this->forward404If(!$article);
     $this->article = $article;
     $this->form = new ArticleForm($article);
     
     if ( $request->isMethod('POST') ) {
        $this->form->bind($request->getParameter($this->form->getName()),
                          $request->getFiles($this->form->getName())
        ); 
        if ($this->form->isValid()) {
            $article = $this->form->save();
            $this->getUser()->setFlash('success', __('changed_saved'));
            $this->redirect('@article?category='.$article->getCategory()->getUrl().'&url='.$article->getUrl());
        } 
     }
  }
  
  public function executeAdd(sfWebRequest $request)
  {
      $this->form = new ArticleForm();
      
      if ( $request->isMethod('POST') ) {
        $this->form->bind($request->getParameter($this->form->getName()),
                          $request->getFiles($this->form->getName())
        ); 
        if ($this->form->isValid()) {
            $article = $this->form->save();
            $this->getUser()->setFlash('success', __('article_added'));
            $this->redirect('@article?category='.$article->getCategory()->getUrl().'&url='.$article->getUrl());
        } 
      }
  }
}
