<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
class homeComponents extends sfComponents
{
  public function executeMenu(sfWebRequest $request)
  {
    $this->categories = CategoryTable::getRoots();
    $this->en_cat = $request->getParameter('category');
    $this->module =  sfContext::getInstance()->getRouting()->getCurrentRouteName();
  }
  
  public function executeRightmenu(sfWebRequest $request)
  {
    
  }
  
  public function executeBreadcrumbs(sfWebRequest $request)
  {
      $route = sfContext::getInstance()->getRouting()->getCurrentRouteName(); 
      if ( $route == 'category' || $route == 'article' ) {
        if ( $route == 'article' ) {
            $article = ArticleTable::getByUrl($request->getParameter('url'));
            $this->articleTitle = $article ? $article->getTitle() : false;
        } else {
            $this->articleTitle = false;
        }
        if ( $request->hasParameter('category') )
            $thisCat = CategoryTable::getByUrl($request->getParameter('category'));
        $this->enCatId = $thisCat ? $thisCat->getId() : false;
        $this->cats = $this->enCatId ? $this->BreadParents($this->enCatId) : false;
      } else if ( $route == 'about' ) {
        $this->static = __('about');  
      } else if ( $route == 'reclame' ) {
        $this->static = __('reclame_blocks');  
      } else if ( $route == 'edit_reclame' ) {
        $this->cats = array(array('id'=>0, 'name'=>__('reclame_blocks'), 'url'=>url_for('@reclame')));
        $this->static = __('editing');  
      }
  }
  
  private function BreadParents($id, &$t = array())
  {
      $c = CategoryTable::getById($id);
      $tmp = array(
          'id' => $c->getId(),
          'name' => $c->getName(),
          'url' => url_for('@category?category='.$c->getUrl()),
          );
      array_unshift($t, $tmp);
      unset($tmp);
      $pId = $c->getParentId();
      if ( $pId != 0 ) {    
          $this->BreadParents($pId, $t);
      } 
      return $t;
  }
  
  public function executeContacts(sfWebRequest $request)
  {
      $this->about = Doctrine::getTable('about')->find(1);
  }
}

