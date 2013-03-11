<?php

/**
 * About form.
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AboutForm extends BaseAboutForm
{
  public function configure()
  {
      $this->disableCSRFProtection();
      $this->embedI18n(array('ru', 'uk', 'en'));
      
      $this->validatorSchema['email'] = new sfValidatorEmail(array('required' => false));
      
      $this->widgetSchema['ru']['adress']->setLabel('adress_ru');
      $this->widgetSchema['uk']['adress']->setLabel('adress_uk');
      $this->widgetSchema['en']['adress']->setLabel('adress_en');
      
      $this->widgetSchema['ru']['description']->setLabel('description_ru');
      $this->widgetSchema['uk']['description']->setLabel('description_uk');
      $this->widgetSchema['en']['description']->setLabel('description_en');
      
      $this->widgetSchema['ru']['description_on_main']->setLabel('description_main_ru');
      $this->widgetSchema['uk']['description_on_main']->setLabel('description_main_uk');
      $this->widgetSchema['en']['description_on_main']->setLabel('description_main_en');
      
//      $this->widgetSchema['ru']['metatags']->setLabel('metatags_ru');
//      $this->widgetSchema['uk']['metatags']->setLabel('metatags_uk');
//      $this->widgetSchema['en']['metatags']->setLabel('metatags_en');
      
      $this->widgetSchema['ru']['keywords']->setLabel('keywords_ru');
      $this->widgetSchema['uk']['keywords']->setLabel('keywords_uk');
      $this->widgetSchema['en']['keywords']->setLabel('keywords_en');
      
      $this->widgetSchema['ru']['title']->setLabel('title_ru');
      $this->widgetSchema['uk']['title']->setLabel('title_uk');
      $this->widgetSchema['en']['title']->setLabel('title_en');

  }
}
