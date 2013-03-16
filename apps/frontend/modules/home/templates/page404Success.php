
<div id="wrapper_404">
    <h1><?php echo __('Page not found'); ?></h1>
    <div class="links">
        <?php 
            echo link_to('<i class="icon-home"></i>', '@homepage', array(
                    'title' => __('To the homepage'),
                    'data-title'=> __('To the homepage') 
                )); 
        ?>
        <?php if (!$sf_user->isAuthenticated()): ?>
            <?php 
                echo link_to('<i class="icon-off"></i>', "@login", array(
                    'title' => __('login'), 
                    'data-title'=> __('login') 
                )); 
            ?>
        <?php endif; ?>
    </div>
</div>