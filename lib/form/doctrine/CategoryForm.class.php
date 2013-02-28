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
      
    $this->setWidget('parent_id', new sfWidgetFormDoctrineChoiceNestedSet(array(
      'model'     => 'Category',
      'add_empty' => __('main')
    )));

    if ($this->getObject()->getNode()->getParent())
    {
      $this->setDefault('parent_id', $this->getObject()->getNode()->getParent()->getId());
    }
 
    $this->widgetSchema->setLabels(array(
      'name'   => 'Category',
      'parent' => 'Parent category'
    ));
 
    $this->setValidator('parent_id', new sfValidatorDoctrineChoiceNestedSet(array(
      'required' => false,
      'model'    => 'Category',
      'node'     => $this->getObject()
    )));
 
    $this->getValidator('parent_id')->setMessage('node', __('A category cannot be made a descendent of itself.'));
             
    $this->embedI18n(array('ru', 'uk', 'en'));

    $this->widgetSchema['ru']['name']->setLabel('name_ru');
    $this->widgetSchema['uk']['name']->setLabel('name_uk');
    $this->widgetSchema['en']['name']->setLabel('name_en');

    $this->widgetSchema['ru']['description']->setLabel('description_ru');
    $this->widgetSchema['uk']['description']->setLabel('description_uk');
    $this->widgetSchema['en']['description']->setLabel('description_en');      
  }
 
  public function doSave($con = null)
  {
    parent::doSave($con);
    
    $cat = $this->getObject();
    $cat->setUrl( myClass::makeUrl($this->getValue('url')) );
    
    if ($this->getValue('parent_id'))
    {
      $parent = Doctrine::getTable('Category')->find($this->getValue('parent_id'));
      if ( $this->isNew() ) {
        $cat->getNode()->insertAsLastChildOf($parent);
      } else {
        $cat->getNode()->moveAsLastChildOf($parent);
      }
      $parent->refresh();
    } else {
      $categoryTree = Doctrine::getTable('Category')->getTree();
      if ( $this->isNew() ) {
        $categoryTree->createRoot($cat);
      } else {
        $cat->getNode()->makeRoot($cat->getId());
      }
    }
    $cat->save();
  }

}
