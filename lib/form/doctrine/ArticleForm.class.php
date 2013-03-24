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
      unset( $this['created_at'], $this['updated_at'] );
      
      $this->setWidget('category_id', new sfWidgetFormDoctrineChoice(array(
        'model'     => 'Category',
        'add_empty' => false
      )));

      $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(
            array(
                'file_src'  => '/uploads'.DIRECTORY_SEPARATOR.'_thumbs'.DIRECTORY_SEPARATOR.$this->getObject()->getLogo(),
                'edit_mode' => !$this->isNew() && is_file(sfConfig::get('sf_upload_dir').'/_thumbs/'.$this->getObject()->getLogo()),
                'is_image'  => true,
                'template'  => '<div class="span6 photo">%file%<BR /><div class="form_label">%delete% '.sfContext::getInstance()->getI18N()->__('delete').'</div></div><div class="span6">%input%</div>'
            )
      );

      $this->validatorSchema['logo'] = new sfValidatorFile(
              array(
                'required' => false,
                'mime_types' => 'web_images',
                'path' => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'_thumbs',
              )
      );
      
      $this->widgetSchema['category_id']->addOption('renderer_class', 'MyCategoryRenderer'); 
      
      $this->widgetSchema['views'] = new sfWidgetFormInputHidden();
      
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
    
    $this->getObject()->getCategory()->setUpdatedAt(date('Y-m-d H:i:s'))->save();
    
//    $ru = $this->getValue('ru');
//    echo '<pre>';
//    preg_match_all('/<img [^>]*src\s*=\s*[\'\"]*?(.+)[\'\"\s>]/isU', $ru['content'], $match);
//    print_r($match);exit;
    
    $this->getObject()->setUrl( myClass::makeUrl($this->getValue('url')) )->save();
    
    if ( $this->getObject()->getLogo() ) {
        
        $dir = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR .'_thumbs';
        $big_dir = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR .'images';
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
            $img->saveAs($url);
        }
    }
  }
}


if (!function_exists('mime_content_type')) {

    function mime_content_type($filename) {

        $mime_types = array(
            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',
// images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
// archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',
// audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',
// adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',
// ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',
// open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );

        $ext = strtolower(array_pop(explode('.', $filename)));
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        } elseif (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            $mimetype = finfo_file($finfo, $filename);
            finfo_close($finfo);
            return $mimetype;
        } else {
            return 'image/jpeg';
        }
    }

}