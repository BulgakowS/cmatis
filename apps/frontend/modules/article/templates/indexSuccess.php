<article>
    <?php if ($article->getlogo()):?>
        <div class="article_logo">
            <img src="/uploads/logos/<?php echo $article->getlogo() ?>" />
        </div>
    <?php endif; ?>
    <div class="title">
        <?php echo $article->getTitle(); ?>
        <?php if ($sf_user->hasCredential('admin')): ?>
        <?php echo link_to('<i class="icon-edit"></i>', '@edit_article?category='.$article->getCategory()->getUrl().'&url='.$article->geturl()); ?>
        <?php endif; ?>
    </div> 
    
    <div class="article-info" >
        <small><?php echo __('updated_at') . $article->getUpdatedAt() ?></small>
    </div>
    
    <div class="content">
        <?php echo htmlspecialchars_decode($article->getContent()); ?>
    </div>
    
</article>