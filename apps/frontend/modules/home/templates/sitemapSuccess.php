<div class="title"><?php echo __('site_tree') ?></div>

<div class="cat_descr row-fluid">
    <div class="span4 offset1"><i class="icon-list"></i> - <?php echo __('categories'); ?></div>
    <div class="span6"><i class="icon-file"></i> - <?php echo __('articles'); ?></div>
</div>

<?php if ( isset($roots) ): ?>
    <div class="container" id="site_map">
        <ul>
        <?php foreach( $roots as $root ): ?>
            <?php $root->renderMap(); ?>
        <?php endforeach; ?>
        </ul>
    </div>    
<?php endif; ?>



