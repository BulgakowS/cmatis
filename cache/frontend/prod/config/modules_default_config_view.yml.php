<?php
// auto-generated by sfViewConfigHandler
// date: 2013/03/01 00:12:28
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'cmatis', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('jquery-ui.css', '', array ());
  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addJavascript('jquery/jquery.min.js', '', array ());
  $response->addJavascript('jquery/jquery-ui.js', '', array ());
  $response->addJavascript('bootstrap/bootstrap.min.js', '', array ());
  $response->addJavascript('bootstrap/bootstrap-modal.js', '', array ());
  $response->addJavascript('ckeditor/ckeditor.js', '', array ());
  $response->addJavascript('main.js', '', array ());


