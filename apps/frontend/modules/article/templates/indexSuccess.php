<article>
    <div class="article_logo_full">
        <?php 
            $is_big = is_file( sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'big_logos'.DIRECTORY_SEPARATOR.$article->getlogo() );
            $is_small = is_file( sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'logos'.DIRECTORY_SEPARATOR.$article->getlogo() );
        ?>
        <?php if ( $article->getlogo() ):?>
            <a href="/uploads/<?php echo $is_big ? 'big_' : ''; ?>logos/<?php echo $article->getlogo() ?>" id="article_logo_view" >
                <img src="/uploads/logos/<?php echo $article->getlogo() ?>" />
            </a>
        <?php else: ?>
            <img src="/uploads/default-no-image.png" />
        <?php endif; ?>
    </div>
    <div class="title">
        <?php echo $article->getTitle(); ?>
        <?php if ($sf_user->hasCredential('admin')): ?>
        <?php echo link_to('<i class="icon-edit"></i>', '@edit_article?category='.$article->getCategory()->getUrl().'&url='.$article->geturl()); ?>
        <?php endif; ?>
    </div> 
    
    <div class="article-info" >
        <small><?php echo __('views') . $article->getViews() ?></small>
        <small><?php echo __('updated_at') . $article->getUpdatedAt() ?></small>
    </div>
    
    <div class="clr"></div>
    
    <div class="content">
        <?php echo htmlspecialchars_decode($article->getContent()); ?>
    </div>
    
    <?php if ( $reclame_bottom->getEnabled() ): ?>
        <div id="article_bottom_reclame" class="reclame" style="width: <?php echo $reclame_bottom->getWidth() ?>px; height: <?php echo $reclame_bottom->getHeight() ?>px;">
            <?php echo htmlspecialchars_decode($reclame_bottom->getHtml()); ?>
        </div>
    <?php endif; ?>
    
</article>