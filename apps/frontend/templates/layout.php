<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="wrapper">  
        <header>
            <a href="<?php echo url_for('@homepage'); ?>" id="logo"></a>
            
            <div id="languages"><?php include_partial('home/languages'); ?></div>
            <div class="clr"></div>
            <div id="contacts"><?php include_component('home', 'contacts'); ?></div>
            
            <?php include_partial('home/flashes'); ?>
        </header>
        
        <?php include_component('home', 'menu'); ?>   
        
        
        <?php if ($sf_user->isAuthenticated()): ?>        
            <aside id="right"> 
                <?php include_component('home', 'rightmenu'); ?>
            </aside>
        <?php  endif; ?>
        
        <?php include_component('home','breadcrumbs'); ?>
        
        <section id="content" class="container">
            <?php echo $sf_content ?>
        </section>  
        
        <div class="clr"></div>
        <div class="page-buffer"></div>
    </div>  
    <footer>
        <div id="contacts"><?php include_component('home', 'contacts'); ?></div>
        <span id="made_by">made by <a href="http://www.linkedin.com/pub/sergey-bulgacov/50/948/a3" > BulgakowS</a></span>
        <div id="copyright"><?php include_component('home', 'copyright'); ?></div>
    </footer>
  </body>
</html>
