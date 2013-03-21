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
      $article = ArticleTable::getByUrlForShow($request->getParameter('url'));
      $this->forward404Unless($article);
      $t = $article->getTitle();
      $this->forward404If( empty($t) );
      $article->setViews( $article->getViews() + 1 );
      $article->save();
      $this->article = $article;
      $this->reclame_bottom = Doctrine::getTable('Reclame')->findOneByPosition(3);
      $response = $this->getResponse();
      $response->addMeta('title', $this->article->getTitle() . ' - Cmatis'  );
      $response->addMeta('keywords', $this->article->getTags() ? $this->article->getTags() : $this->article->getTitle());
  }
  
  public function executeEdit(sfWebRequest $request)
  {
     $this->forward404If(!$this->getUser()->isAuthenticated());
     $article = ArticleTable::getByUrlEdit($request->getParameter('url'));
     $this->forward404If(!$article);
     $this->article = $article;
     $this->form = new ArticleForm($article);
     
     if ( $request->isMethod('POST') ) { 
        $this->form->bind(
                $request->getParameter($this->form->getName()),
                $request->getFiles($this->form->getName())
        );
        if ($this->form->isValid()) {
            $article = $this->form->save();
            $this->getUser()->setFlash('success', __('changed_saved'));
            if ( $article->getEnabled() )
                $this->redirect('@article?category='.$article->getCategory()->getUrl().'&url='.$article->getUrl());
            else
                $this->redirect('@category?category='.$article->getCategory()->getUrl());
        } 
     }
  }
  
  public function executeAdd(sfWebRequest $request)
  {
      $this->forward404If(!$this->getUser()->isAuthenticated());
      $this->cat_count = Doctrine::getTable('Category')->findAll()->count();
      
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
  
  public function executeDelete(sfWebRequest $request)
  {     
      $this->forward404If(!$this->getUser()->isAuthenticated());
      $this->forward404If(!$request->hasParameter('url'));
      
      $article = ArticleTable::getByUrl($request->getParameter('url'));
      $this->forward404If(!$article);
      
      $article->delete();
      
      $this->getUser()->setFlash('success', __('article_deleted'));
      $this->redirect('@homepage');
      $this->setTemplate(false);
  }
}
