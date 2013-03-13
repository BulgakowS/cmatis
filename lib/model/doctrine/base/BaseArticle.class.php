<?php

/**
 * BaseArticle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $url
 * @property string $author
 * @property string $logo
 * @property string $title
 * @property string $content
 * @property float $price
 * @property string $terms
 * @property boolean $enabled
 * @property string $tags
 * @property integer $views
 * @property boolean $on_main
 * @property boolean $lan_enable
 * @property Category $Category
 * 
 * @method integer  getCategoryId()  Returns the current record's "category_id" value
 * @method string   getUrl()         Returns the current record's "url" value
 * @method string   getAuthor()      Returns the current record's "author" value
 * @method string   getLogo()        Returns the current record's "logo" value
 * @method string   getTitle()       Returns the current record's "title" value
 * @method string   getContent()     Returns the current record's "content" value
 * @method float    getPrice()       Returns the current record's "price" value
 * @method string   getTerms()       Returns the current record's "terms" value
 * @method boolean  getEnabled()     Returns the current record's "enabled" value
 * @method string   getTags()        Returns the current record's "tags" value
 * @method integer  getViews()       Returns the current record's "views" value
 * @method boolean  getOnMain()      Returns the current record's "on_main" value
 * @method boolean  getLanEnable()   Returns the current record's "lan_enable" value
 * @method Category getCategory()    Returns the current record's "Category" value
 * @method Article  setCategoryId()  Sets the current record's "category_id" value
 * @method Article  setUrl()         Sets the current record's "url" value
 * @method Article  setAuthor()      Sets the current record's "author" value
 * @method Article  setLogo()        Sets the current record's "logo" value
 * @method Article  setTitle()       Sets the current record's "title" value
 * @method Article  setContent()     Sets the current record's "content" value
 * @method Article  setPrice()       Sets the current record's "price" value
 * @method Article  setTerms()       Sets the current record's "terms" value
 * @method Article  setEnabled()     Sets the current record's "enabled" value
 * @method Article  setTags()        Sets the current record's "tags" value
 * @method Article  setViews()       Sets the current record's "views" value
 * @method Article  setOnMain()      Sets the current record's "on_main" value
 * @method Article  setLanEnable()   Sets the current record's "lan_enable" value
 * @method Article  setCategory()    Sets the current record's "Category" value
 * 
 * @package    cmatis
 * @subpackage model
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('article');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('author', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('content', 'string', 50000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 50000,
             ));
        $this->hasColumn('price', 'float', null, array(
             'type' => 'float',
             'notnull' => false,
             ));
        $this->hasColumn('terms', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('enabled', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             ));
        $this->hasColumn('tags', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('views', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             'notnull' => false,
             ));
        $this->hasColumn('on_main', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('lan_enable', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'content',
              2 => 'tags',
              3 => 'lan_enable',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($i18n0);
    }
}