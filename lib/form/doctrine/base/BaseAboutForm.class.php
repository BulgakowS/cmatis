<?php

/**
 * About form base class.
 *
 * @method About getObject() Returns the current form's model object
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAboutForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormInputHidden(),
      'phone' => new sfWidgetFormInputText(),
      'fax'   => new sfWidgetFormInputText(),
      'icq'   => new sfWidgetFormInputText(),
      'skype' => new sfWidgetFormInputText(),
      'email' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'phone' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fax'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'icq'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'skype' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('about[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'About';
  }

}
