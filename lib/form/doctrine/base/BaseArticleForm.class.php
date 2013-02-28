<?php

/**
 * Article form base class.
 *
 * @method Article getObject() Returns the current form's model object
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArticleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'url'         => new sfWidgetFormInputText(),
      'author'      => new sfWidgetFormInputText(),
      'logo'        => new sfWidgetFormInputText(),
      'price'       => new sfWidgetFormInputText(),
      'terms'       => new sfWidgetFormInputText(),
      'enabled'     => new sfWidgetFormInputCheckbox(),
      'views'       => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'url'         => new sfValidatorString(array('max_length' => 255)),
      'author'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'logo'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'       => new sfValidatorNumber(array('required' => false)),
      'terms'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'enabled'     => new sfValidatorBoolean(array('required' => false)),
      'views'       => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Article', 'column' => array('url')))
    );

    $this->widgetSchema->setNameFormat('article[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Article';
  }

}
