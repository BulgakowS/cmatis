<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
class homeComponents extends sfComponents
{
  public function executeMenu(sfWebRequest $request)
  {
    $this->categories = CategoryTable::getRoots();
//    echo '<pre>';print_r($this->categories->toArray());exit;
    $this->en_cat = $request->getParameter('category');
    $this->module =  sfContext::getInstance()->getRouting()->getCurrentRouteName();
  }
  
  public function executeRightmenu(sfWebRequest $request)
  {
    
  }
  
  public function executeContacts(sfWebRequest $request)
  {
      $about = Doctrine::getTable('about')->find(1);
      $this->about = $about;
  }
}

