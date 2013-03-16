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
        $thisCat = CategoryTable::getByUrl($request->getParameter('category'));
        $this->enCatId = $thisCat ? $thisCat->getId() : false;
        $this->cats = $this->enCatId ? $this->BreadParents($this->enCatId) : false;
      } else if ( $route == 'about' ) {
        $this->static = __('about');  
      }
  }
  
  private function BreadParents($id, $t = array())
  {
      $c = CategoryTable::getById($id);
      $tmp = array(
          'id' => $c->getId(),
          'name' => $c->getName(),
          'url' => $c->getUrl(),
          );
      array_unshift($t, $tmp);
      unset($tmp);
      $pId = $c->getParentId();
      if ( $pId != 0 ) {    
          $this->BreadParents($pId, &$t);
      } 
      return $t;
  }
  
  public function executeContacts(sfWebRequest $request)
  {
      $this->about = Doctrine::getTable('about')->find(1);
  }
}

