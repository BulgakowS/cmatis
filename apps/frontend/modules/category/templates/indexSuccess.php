<div class="title">
    <?php echo $cat->getName(); ?>
    <?php if ($sf_user->hasCredential('admin')): ?>
    <?php echo link_to('<i class="icon-edit"></i>', '@edit_category?url='.$cat->geturl()); ?>
    <?php endif; ?>
</div>

<?php if ( $cat->getDescription() ): ?>
    <div class="description">
        <?php echo htmlspecialchars_decode($cat->getDescription()); ?>
    </div>
<?php endif; ?>

<?php if ( $subCats && count($subCats) > 0): ?>
    <nav id="subCats">
        <h4><?php echo __('sub_categoryes');?></h4>
        <ul>
        <?php foreach ($subCats as $sub): ?>
            <li>
                <?php echo link_to('<i class="icon-bookmark"></i>'.$sub->getName(), '@category?category='.$sub->getUrl()); ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </nav>
    <div class="clr"></div>
<?php endif; ?>

<?php if ($articles && count($articles) > 0): ?>
    <div class="cat_articles">
        <ul>
        <?php foreach($articles as $article): ?>
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
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>




