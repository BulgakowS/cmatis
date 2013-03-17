<?php

/**
 * Reclame form base class.
 *
 * @method Reclame getObject() Returns the current form's model object
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReclameForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'html'     => new sfWidgetFormTextarea(),
      'enabled'  => new sfWidgetFormInputCheckbox(),
      'position' => new sfWidgetFormInputText(),
      'title'    => new sfWidgetFormInputText(),
      'width'    => new sfWidgetFormInputText(),
      'height'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'html'     => new sfValidatorString(array('max_length' => 15000, 'required' => false)),
      'enabled'  => new sfValidatorBoolean(array('required' => false)),
      'position' => new sfValidatorInteger(array('required' => false)),
      'title'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'width'    => new sfValidatorInteger(array('required' => false)),
      'height'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reclame[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reclame';
  }

}
