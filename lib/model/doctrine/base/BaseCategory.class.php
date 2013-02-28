<?php

/**
 * BaseCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $url
 * @property integer $position
 * @property string $description
 * @property Doctrine_Collection $Article
 * 
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getUrl()         Returns the current record's "url" value
 * @method integer             getPosition()    Returns the current record's "position" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method Doctrine_Collection getArticle()     Returns the current record's "Article" collection
 * @method Category            setName()        Sets the current record's "name" value
 * @method Category            setUrl()         Sets the current record's "url" value
 * @method Category            setPosition()    Sets the current record's "position" value
 * @method Category            setDescription() Sets the current record's "description" value
 * @method Category            setArticle()     Sets the current record's "Article" collection
 * 
 * @package    cmatis
 * @subpackage model
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('position', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             'default' => 1,
             ));
        $this->hasColumn('description', 'string', 50000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 50000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Article', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'description',
             ),
             ));
        $nestedset0 = new Doctrine_Template_NestedSet(array(
             'hasManyRoots' => true,
             'rootColumnName' => 'parent_id',
             ));
        $this->actAs($i18n0);
        $this->actAs($nestedset0);
    }
}