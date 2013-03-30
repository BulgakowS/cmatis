<?php use_javascript('wookmark.min.js'); ?>

<div id="main_articles_reclame">
    <?php 
        if ( $reclame_big->getEnabled() ) {
            echo htmlspecialchars_decode($reclame_big->getHtml());
        } else {
            echo '<img src="/images/big_logo.png" />';
        }
    ?>
</div>

<div id="last_articles">
    <?php if ( count($lastArticles) > 0): ?>
        <ul>
        <?php foreach ( $lastArticles as $article ): ?>
            <li class="last_main">
                <a href="<?php echo url_for('@article?category='.$article->getCategory()->getUrl().'&url='.$article->getUrl()); ?>" >
                    <div class="article_logo_wrap">
                        <?php if (is_file( sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'_thumbs'.DIRECTORY_SEPARATOR.$article->getLogo() )): ?>
                            <img src="/uploads/_thumbs/<?php echo $article->getLogo(); ?>" class="article_logo"/>
                        <?php else: ?>
                            <img src="/uploads/default-no-image.png" class="article_logo"/>
                        <?php endif; ?>
                    </div>
                    <div class="text">
                        <?php echo $article->getTitle(); ?>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>


<div class="clr"></div>

<?php if ($about->getDescriptionOnMain()): ?>
    <div class="description" id="description-main">
        <?php echo htmlspecialchars_decode($about->getDescriptionOnMain()); ?>
    </div>
    <div class="clr"></div>
<?php endif; ?>

<?php if ( count($lastCategories) > 0 ): ?>
    <ul id="main_categoies" class="last_by_cats">
        <?php foreach ( $lastCategories as $root ): ?>
            <?php 
                $lasts = $root->getLastArticles();
                if ( count($lasts) > 0 ): ?>
                    <li class="main_cats">
                        <div class="name"><?php echo link_to($root->getName(), '@category?category='.$root->getUrl()); ?></div>
                        <ul>
                        <?php foreach($lasts as $art): ?>
                            <li>
                                <a href="<?php echo url_for('@article?category='.$art->getCategory()->getUrl().'&url='.$art->getUrl()); ?>" 
                                   >
                                    <div class="article_logo_wrap">
                                        <?php if (is_file( sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'_thumbs'.DIRECTORY_SEPARATOR.$art->getLogo() )): ?>
                                            <img src="/uploads/_thumbs/<?php echo $art->getLogo(); ?>" class="article_logo" title="<?php echo $art->getTitle(); ?>"/>
                                        <?php else: ?>
                                            <img src="/uploads/default-no-image.png" class="article_logo" title="<?php echo $art->getTitle(); ?>"/>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text">
                                        <?php echo $art->getTitle(); ?>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
        <?php endforeach; ?>
        <div class="clr"></div>
    </ul>
<?php endif; ?>

<div class="clr"></div>

<?php if ( $reclame_bottom->getEnabled() ): ?>
    <div id="main_bottom_reclame" class="reclame" style="width: <?php echo $reclame_bottom->getWidth() ?>px; height: <?php echo $reclame_bottom->getHeight() ?>px;">
        <?php echo htmlspecialchars_decode($reclame_bottom->getHtml()); ?>
    </div>
<?php endif; ?>


<script>
    $('.main_cats').wookmark({
        container: $('#main_categoies'),
        offset: 35
    });
</script>
