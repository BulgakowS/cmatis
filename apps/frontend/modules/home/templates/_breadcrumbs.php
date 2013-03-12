
<ul id="breadcrumps" class="breadcrumb">
    <li>
        <a href="<?php echo url_for('@homepage'); ?>"><i class="icon-home"></i></a>
        <span class="divider">/</span>
    </li>
    <?php if ($cats) foreach( $cats as $cat ): ?>
        <?php if ( ($cat['id'] == $enCatId) && !$articleTitle ): ?>
            <li class="active" ><?php echo $cat['name'] ?></li>
        <?php else: ?>
            <li>
                <a href="<?php echo url_for('@category?category='.$cat['url']); ?>"><?php echo $cat['name'] ?></a>
                <span class="divider">/</span>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php if ($articleTitle): ?>
        <li class="active" ><?php echo $articleTitle; ?></li>
    <?php endif; ?>
</ul>
