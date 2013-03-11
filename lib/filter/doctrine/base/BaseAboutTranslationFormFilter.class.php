<?php

/**
 * AboutTranslation filter form base class.
 *
 * @package    cmatis
 * @subpackage filter
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAboutTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'adress'              => new sfWidgetFormFilterInput(),
      'description'         => new sfWidgetFormFilterInput(),
      'description_on_main' => new sfWidgetFormFilterInput(),
      'keywords'            => new sfWidgetFormFilterInput(),
      'title'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'adress'              => new sfValidatorPass(array('required' => false)),
      'description'         => new sfValidatorPass(array('required' => false)),
      'description_on_main' => new sfValidatorPass(array('required' => false)),
      'keywords'            => new sfValidatorPass(array('required' => false)),
      'title'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('about_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AboutTranslation';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'adress'              => 'Text',
      'description'         => 'Text',
      'description_on_main' => 'Text',
      'keywords'            => 'Text',
      'title'               => 'Text',
      'lang'                => 'Text',
    );
  }
}
