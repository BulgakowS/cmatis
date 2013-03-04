<?php

/**
 * Article form.
 *
 * @package    cmatis
 * @subpackage form
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArticleForm extends BaseArticleForm
{
  public function configure()
  {
      $this->disableCSRFProtection();
      unset( $this['created_at'], $this['updated_at'] );
      
      $this->setWidget('category_id', new sfWidgetFormDoctrineChoice(array(
        'model'     => 'Category',
        'add_empty' => false
      )));

      $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(
            array(
                'file_src'  => '/uploads/logos/'.$this->getObject()->getLogo(),
                'edit_mode' => !$this->isNew(),
                'is_image'  => true,
                'template'  => '<div class="span6">%file%<BR /><div class="form_label">%delete% '.__('delete').'</div></div><div class="span6">%input%</div>'
            )
      );

      $this->validatorSchema['logo'] = new sfValidatorFile(
              array(
                'required' => false,
                'mime_types' => 'web_images',
                'path' => sfConfig::get('sf_upload_dir').'/logos',
              )
      );
      
      $this->widgetSchema['category_id']->addOption('renderer_class', 'MyCategoryRenderer'); 
      
      $this->embedI18n(array('ru', 'uk', 'en'));
      
      $this->widgetSchema['ru']['title']->setLabel('title_ru');
      $this->widgetSchema['uk']['title']->setLabel('title_uk');
      $this->widgetSchema['en']['title']->setLabel('title_en');

      $this->widgetSchema['ru']['content']->setLabel('content_ru');
      $this->widgetSchema['uk']['content']->setLabel('content_uk');
      $this->widgetSchema['en']['content']->setLabel('content_en');
      
      $this->widgetSchema['ru']['tags']->setLabel('tags_ru');
      $this->widgetSchema['uk']['tags']->setLabel('tags_uk');
      $this->widgetSchema['en']['tags']->setLabel('tags_en'); 
  }
  
  public function doSave($con = null)
  {
    parent::doSave($con);
    
    $this->getObject()->setUrl( myClass::makeUrl($this->getValue('url')) )->save();
    
    if ($this->getValue('logo')) {
        $url = sfConfig::get('sf_upload_dir').'/logos/'.$this->getValue('logo');
        if (is_file($url) ) {
            $img = new sfImage($url, mime_content_type($url));
            $img->thumbnail(150,150);
            $img->setQuality(100);
            $img->save();
        }
    }
  }
}
