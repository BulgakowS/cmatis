
<div class="title">
    <?php echo $cat->getName(); ?>
    <?php if ($sf_user->hasCredential('admin')): ?>
    <?php echo link_to('<i class="icon-edit"></i>', '@edit_category?url='.$cat->getUrl()); ?>
    <?php endif; ?>
</div>

<?php if ( $cat->getDescription() ): ?>
    <div class="description cat_descr">
        <?php echo htmlspecialchars_decode($cat->getDescription()); ?>
    </div>
<?php endif; ?>

<?php if ( $after_descr_reclame->getEnabled() ): ?>
    <div id="category_after_descr_reclame" class="reclame" style="width: <?php echo $after_descr_reclame->getWidth() ?>px; height: <?php echo $after_descr_reclame->getHeight() ?>px;">
        <?php echo htmlspecialchars_decode($after_descr_reclame->getHtml()); ?>
    </div>
<?php endif; ?>

<?php if ( $subCats && count($subCats) > 0): ?>
    <div id="subCats">
        <h4><?php echo __('sub_categoryes');?></h4><div>
        <ul>
        <?php foreach ($subCats as $sub): ?>
            <?php  $t = $sub->getName(); if ( !empty($t) ): ?> 
                <li>
                    <?php echo link_to('<i class="icon-bookmark"></i>'.$sub->getName(), '@category?category='.$sub->getUrl()); ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
        </ul>
        </div>
    </div>
<?php endif; ?>

<div class="clr"></div>

<?php if ($articles && count($articles) > 0): ?>
    <div class="cat_articles">
        <ul>
        <?php foreach($articles as $article): ?>
            <?php  $t = $article->getTitle(); if ( !empty($t) ): ?> 
                <li>
                    <a href="<?php echo url_for('@article?category='.$article->getCategory()->getUrl().'&url='.$article->getUrl()); ?>" >
                        <div class="cat_logo_in_list_div">
                            <?php if (is_file( sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'logos'.DIRECTORY_SEPARATOR.$article->getLogo() )): ?>
                                <img src="/uploads/logos/<?php echo $article->getLogo(); ?>" class="cat_logo_in_list"/>
                            <?php else: ?>
                                <img src="/uploads/default-no-image.png" class="cat_logo_in_list"/>
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <?php echo $article->getTitle(); ?>
                        </div>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>


