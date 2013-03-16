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
        
        <nav id="menu_nav"> 
          <?php if (!$sf_user->isAuthenticated()): ?>
            <a href="<?php echo url_for('@login'); ?>" id="login_link" data-title="<?php echo __('login') ?>"><i class="icon-off icon-white"></i></a>
          <?php else: ?>
            <a href="<?php echo url_for('@logout'); ?>" id="logout_link" data-title="<?php echo __('logout') ?>"><i class="icon-off icon-white"></i></a>
          <?php endif; ?>
          <?php include_component('home', 'menu'); ?>   
        </nav>
        
        <?php if ($sf_user->hasCredential('admin')): ?>        
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
        <div id="made_by">made by <a href="http://www.linkedin.com/pub/sergey-bulgacov/50/948/a3" > BulgakowS</a></div>
    </footer>
  </body>
</html>
