<?php

/**
 * BaseSetting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $news
 * @property integer $news_by_category
 * @property integer $categories_on_main
 * 
 * @method integer getNews()               Returns the current record's "news" value
 * @method integer getNewsByCategory()     Returns the current record's "news_by_category" value
 * @method integer getCategoriesOnMain()   Returns the current record's "categories_on_main" value
 * @method Setting setNews()               Sets the current record's "news" value
 * @method Setting setNewsByCategory()     Sets the current record's "news_by_category" value
 * @method Setting setCategoriesOnMain()   Sets the current record's "categories_on_main" value
 * 
 * @package    cmatis
 * @subpackage model
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSetting extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('setting');
        $this->hasColumn('news', 'integer', null, array(
             'type' => 'integer',
             'default' => 5,
             ));
        $this->hasColumn('news_by_category', 'integer', null, array(
             'type' => 'integer',
             'default' => 3,
             ));
        $this->hasColumn('categories_on_main', 'integer', null, array(
             'type' => 'integer',
             'default' => 6,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}