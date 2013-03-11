<?php

/**
 * Reclame filter form base class.
 *
 * @package    cmatis
 * @subpackage filter
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReclameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'html'     => new sfWidgetFormFilterInput(),
      'enabled'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'position' => new sfWidgetFormFilterInput(),
      'title'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'html'     => new sfValidatorPass(array('required' => false)),
      'enabled'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'position' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'title'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reclame_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reclame';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'html'     => 'Text',
      'enabled'  => 'Boolean',
      'position' => 'Number',
      'title'    => 'Text',
    );
  }
}
