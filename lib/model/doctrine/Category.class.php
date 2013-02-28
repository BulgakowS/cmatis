<?php

/**
 * Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    cmatis
 * @subpackage model
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Category extends BaseCategory
{
    public function getSubs()
    {
        $cu = substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2);
        return CategoryTable::getSubs($this->getId(), $cu);
    }
    
    public function isSubcategory(){
        return $this->parent_id != 0;
    }
    
    public function getLastArticles(){
        return Doctrine::getTable('Article')->createQuery('a')
                ->orderBy('updated_at')
                ->limit(5)
                ->execute();
    }
}
