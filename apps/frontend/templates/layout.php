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
        <div id="counters" >
            <!--LiveInternet counter--><script type="text/javascript"><!--
                document.write("<a href='http://www.liveinternet.ru/click' "+
                "target=_blank><img src='//counter.yadro.ru/hit?t14.2;r"+
                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                ";h"+escape(document.title.substring(0,80))+";"+Math.random()+
                "' alt='' title='LiveInternet: показано число просмотров за 24"+
                " часа, посетителей за 24 часа и за сегодня' "+
                "border='0' width='88' height='31'><\/a>")
            //--></script><!--/LiveInternet-->
        </div>
        <div id="contacts"><?php include_component('home', 'contacts'); ?></div>
        <span id="made_by">made by <a href="http://www.linkedin.com/pub/sergey-bulgacov/50/948/a3" > BulgakowS</a></span>
        <div id="copyright"><?php include_component('home', 'copyright'); ?></div>
    </footer>
      
      
      <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-39557996-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

      </script>
      
      
  </body>
</html>
