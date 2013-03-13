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
                'file_src'  => '/uploads'.DIRECTORY_SEPARATOR.'logos'.DIRECTORY_SEPARATOR.$this->getObject()->getLogo(),
                'edit_mode' => !$this->isNew() && is_file(sfConfig::get('sf_upload_dir').'/logos/'.$this->getObject()->getLogo()),
                'is_image'  => true,
                'template'  => '<div class="span6 photo">%file%<BR /><div class="form_label">%delete% '.__('delete').'</div></div><div class="span6">%input%</div>'
            )
      );

      $this->validatorSchema['logo'] = new sfValidatorFile(
              array(
                'required' => false,
                'mime_types' => 'web_images',
                'path' => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'logos',
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
      
      $this->widgetSchema['ru']['lan_enable']->setLabel('lan_enable_ru');
      $this->widgetSchema['uk']['lan_enable']->setLabel('lan_enable_uk');
      $this->widgetSchema['en']['lan_enable']->setLabel('lan_enable_en'); 
  }
  
  public function doSave($con = null)
  {
    parent::doSave($con);
    
    $this->getObject()->setUrl( myClass::makeUrl($this->getValue('url')) )->save();
    
    if ( $this->getObject()->getLogo() ) {
//        $old_logo = $this->
        
        
        $dir = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR .'logos';
        $big_dir = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR .'big_logos';
        if ( !is_dir($dir) ) {
            mkdir($dir, 0777, true);
        }
        if ( !is_dir($big_dir) ) {
            mkdir($big_dir, 0777, true);
        }
        $url = $dir.DIRECTORY_SEPARATOR.$this->getObject()->getLogo();
        $url_big = $big_dir.DIRECTORY_SEPARATOR.$this->getObject()->getLogo();
        if ( is_file($url) ) {
            $img = new sfImage( $url, mime_content_type($url) );
            $img->saveAs($url_big);
            $img->setQuality(100);
            $img->resize(300, null, true, true);
            $img->save();
        }
    }
  }
}
