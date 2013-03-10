<?php if ( count($lastArticles) > 0): ?>
    <div id="last_articles">
        <ul>
        <?php foreach ( $lastArticles as $article ): ?>
            <li class="last_main">
                <a href="<?php echo url_for('@article?category='.$article->getCategory()->getUrl().'&url='.$article->getUrl()); ?>" >
                    <div class="article_logo_wrap">
                        <?php if (is_file( sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'logos'.DIRECTORY_SEPARATOR.$article->getLogo() )): ?>
                            <img src="/uploads/logos/<?php echo $article->getLogo(); ?>" class="article_logo"/>
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
    </div>
<?php endif; ?>

<?php if ( count($lastCategories) > 0 ): ?>
    <div id="main_categoies" class="last_by_cats">
        <?php foreach ( $lastCategories as $root ): ?>
            <?php 
                $last = $root->getLastArticles();
                if ( count($last) > 0 ): ?>
                    <div class="main_cats">
                        <div class="name"><?php echo link_to($root->getName(), '@category?category='.$root->getUrl()); ?></div>
                        <ul>
                            <?php foreach($last as $art): ?>
                                <li>
                                    <a href="<?php echo url_for('@article?category='.$art->getCategory()->getUrl().'&url='.$art->getUrl()); ?>" >
                                        <div class="article_logo_wrap">
                                            <?php if (is_file( sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'logos'.DIRECTORY_SEPARATOR.$art->getLogo() )): ?>
                                                <img src="/uploads/logos/<?php echo $art->getLogo(); ?>" class="article_logo"/>
                                            <?php else: ?>
                                                <img src="/uploads/default-no-image.png" class="article_logo"/>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text">
                                            <?php echo $art->getTitle(); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
        <?php endforeach; ?>
        <div class="clr"></div>
    </div>
<?php endif; ?>
