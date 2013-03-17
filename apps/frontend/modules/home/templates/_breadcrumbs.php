
<ul id="breadcrumps" class="breadcrumb">
    <li>
        <a href="<?php echo url_for('@homepage'); ?>"><i class="icon-home"></i></a>
        <span class="divider">/</span>
    </li>
    <?php $enCatId = isset($enCatId) ? $enCatId : -1; ?>
    <?php if (isset($cats) && !empty($cats)) foreach( $cats as $cat ): ?>
        <?php if ( ($cat['id'] == $enCatId) && !isset($articleTitle) ): ?>
            <li class="active" ><?php echo $cat['name'] ?></li>
        <?php else: ?>
            <li>
                <a href="<?php echo $cat['url']; ?>"><?php echo $cat['name'] ?></a>
                <span class="divider">/</span>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
            
    <?php if (isset($articleTitle) && !empty($articleTitle)): ?>
        <li class="active" ><?php echo $articleTitle; ?></li>
    <?php endif; ?>

    <?php if ( isset($static) && !empty($static) ): ?>
        <li class="active" ><?php echo $static; ?></li>
    <?php endif; ?>
</ul>
