<?php
/**
 * Category form.
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryForm extends BaseCategoryForm
{
  public function configure()
  {
      $this->disableCSRFProtection();
      unset( $this['created_at'], $this['updated_at'] );
      
    $this->setWidget('parent_id', new sfWidgetFormDoctrineChoice(array(
      'model'     => 'Category',
      'add_empty' => __('main')
    )));
    
    $this->widgetSchema['parent_id']->addOption('renderer_class', 'MyCategoryRenderer');    

    $this->embedI18n(array('ru', 'uk', 'en'));

    $this->widgetSchema['ru']['name']->setLabel('name_ru');
    $this->widgetSchema['uk']['name']->setLabel('name_uk');
    $this->widgetSchema['en']['name']->setLabel('name_en');

    $this->widgetSchema['ru']['description']->setLabel('description_ru');
    $this->widgetSchema['uk']['description']->setLabel('description_uk');
    $this->widgetSchema['en']['description']->setLabel('description_en');  
    
    $this->widgetSchema['ru']['lan_enable']->setLabel('lan_enable_ru');
    $this->widgetSchema['uk']['lan_enable']->setLabel('lan_enable_uk');
    $this->widgetSchema['en']['lan_enable']->setLabel('lan_enable_en'); 
  }
 
    public function doSave($con = null)
    {
      parent::doSave($con);

      $cat = $this->getObject();
      $cat->setUrl( myClass::makeUrl($this->getValue('url')) )->save();

      $this->updateChieldsLevel($cat->getId());
    }
  
    public function updateChieldsLevel($id)
    {
        $c = Category::getCategoryById( $id );
        $c->updateLevel();
        if ( $c->getChieldscount() > 0 ) {
            foreach ($c->getSubs() as $sc){
                $sc->updateLevel();
                if ( $sc->getChieldscount() > 0 ) 
                    $this->updateChieldsLevel($sc->getId());
            }
        }
    }
  
}
