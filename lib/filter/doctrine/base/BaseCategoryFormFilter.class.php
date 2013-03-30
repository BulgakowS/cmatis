<?php

/**
 * Category filter form base class.
 *
 * @package    cmatis
 * @subpackage filter
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'level'      => new sfWidgetFormFilterInput(),
      'parent_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'position'   => new sfWidgetFormFilterInput(),
      'on_main'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'in_menu'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'templ'      => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'url'        => new sfValidatorPass(array('required' => false)),
      'level'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'parent_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'on_main'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'in_menu'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'templ'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Category';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'url'        => 'Text',
      'level'      => 'Number',
      'parent_id'  => 'Number',
      'position'   => 'Number',
      'on_main'    => 'Boolean',
      'in_menu'    => 'Boolean',
      'templ'      => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
