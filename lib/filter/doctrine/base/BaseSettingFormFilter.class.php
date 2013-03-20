<?php

/**
 * Setting filter form base class.
 *
 * @package    cmatis
 * @subpackage filter
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'news'               => new sfWidgetFormFilterInput(),
      'news_by_category'   => new sfWidgetFormFilterInput(),
      'categories_on_main' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'news'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'news_by_category'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'categories_on_main' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Setting';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'news'               => 'Number',
      'news_by_category'   => 'Number',
      'categories_on_main' => 'Number',
    );
  }
}
