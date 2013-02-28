<?php

/**
 * BaseReclame
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $html
 * @property boolean $enabled
 * @property integer $position
 * @property string $title
 * 
 * @method string  getHtml()     Returns the current record's "html" value
 * @method boolean getEnabled()  Returns the current record's "enabled" value
 * @method integer getPosition() Returns the current record's "position" value
 * @method string  getTitle()    Returns the current record's "title" value
 * @method Reclame setHtml()     Sets the current record's "html" value
 * @method Reclame setEnabled()  Sets the current record's "enabled" value
 * @method Reclame setPosition() Sets the current record's "position" value
 * @method Reclame setTitle()    Sets the current record's "title" value
 * 
 * @package    cmatis
 * @subpackage model
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReclame extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reclame');
        $this->hasColumn('html', 'string', 15000, array(
             'type' => 'string',
             'length' => 15000,
             ));
        $this->hasColumn('enabled', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('position', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('title', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
             ),
             ));
        $this->actAs($i18n0);
    }
}