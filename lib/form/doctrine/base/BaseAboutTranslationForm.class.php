<?php

/**
 * AboutTranslation form base class.
 *
 * @method AboutTranslation getObject() Returns the current form's model object
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAboutTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'adress'              => new sfWidgetFormInputText(),
      'description'         => new sfWidgetFormTextarea(),
      'description_on_main' => new sfWidgetFormTextarea(),
      'keywords'            => new sfWidgetFormInputText(),
      'title'               => new sfWidgetFormInputText(),
      'lang'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'adress'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'         => new sfValidatorString(array('max_length' => 15000, 'required' => false)),
      'description_on_main' => new sfValidatorString(array('max_length' => 15000, 'required' => false)),
      'keywords'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lang'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('about_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AboutTranslation';
  }

}
