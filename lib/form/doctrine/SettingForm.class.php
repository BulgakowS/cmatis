<?php

/**
 * Setting form.
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SettingForm extends BaseSettingForm
{
  public function configure()
  {
      $this->widgetSchema['news']->setLabel('setting_news');
      $this->widgetSchema['news_by_category']->setLabel('setting_news_by_category');
      $this->widgetSchema['categories_on_main']->setLabel('setting_categories_on_main');
  }
}
