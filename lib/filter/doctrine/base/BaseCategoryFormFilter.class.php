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
      'url'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'level'     => new sfWidgetFormFilterInput(),
      'parent_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'position'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'url'       => new sfValidatorPass(array('required' => false)),
      'level'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'parent_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'id'        => 'Number',
      'url'       => 'Text',
      'level'     => 'Number',
      'parent_id' => 'Number',
      'position'  => 'Number',
    );
  }
}
