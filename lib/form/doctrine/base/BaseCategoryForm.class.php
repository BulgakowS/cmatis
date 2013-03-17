<?php

/**
 * Category form base class.
 *
 * @method Category getObject() Returns the current form's model object
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'url'        => new sfWidgetFormInputText(),
      'level'      => new sfWidgetFormInputText(),
      'parent_id'  => new sfWidgetFormInputText(),
      'position'   => new sfWidgetFormInputText(),
      'on_main'    => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'url'        => new sfValidatorString(array('max_length' => 255)),
      'level'      => new sfValidatorInteger(array('required' => false)),
      'parent_id'  => new sfValidatorInteger(array('required' => false)),
      'position'   => new sfValidatorInteger(array('required' => false)),
      'on_main'    => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Category', 'column' => array('url')))
    );

    $this->widgetSchema->setNameFormat('category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Category';
  }

}
