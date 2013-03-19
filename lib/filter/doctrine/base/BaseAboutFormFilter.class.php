<?php

/**
 * About filter form base class.
 *
 * @package    cmatis
 * @subpackage filter
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAboutFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'phone'     => new sfWidgetFormFilterInput(),
      'fax'       => new sfWidgetFormFilterInput(),
      'icq'       => new sfWidgetFormFilterInput(),
      'skype'     => new sfWidgetFormFilterInput(),
      'email'     => new sfWidgetFormFilterInput(),
      'copyright' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'phone'     => new sfValidatorPass(array('required' => false)),
      'fax'       => new sfValidatorPass(array('required' => false)),
      'icq'       => new sfValidatorPass(array('required' => false)),
      'skype'     => new sfValidatorPass(array('required' => false)),
      'email'     => new sfValidatorPass(array('required' => false)),
      'copyright' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('about_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'About';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'phone'     => 'Text',
      'fax'       => 'Text',
      'icq'       => 'Text',
      'skype'     => 'Text',
      'email'     => 'Text',
      'copyright' => 'Text',
    );
  }
}
