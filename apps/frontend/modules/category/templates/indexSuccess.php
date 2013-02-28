<h2 class="title">
    <?php echo $cat->getName(); ?>
    <?php if ($sf_user->hasCredential('admin')): ?>
    <?php echo link_to('<i class="icon-edit"></i>', '@edit_category?url='.$cat->geturl()); ?>
    <?php endif; ?>
</h2>

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
                <i class="icon-hand-right"></i>
                <?php echo link_to($article->getTitle(), '@article?category='.$article->getCategory()->getUrl().'&url='.$article->getUrl()); ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>




