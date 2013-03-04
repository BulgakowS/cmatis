<ul id="menu" class="topnav">
    <li>
        <a href="<?php echo url_for('@homepage'); ?>" > 
            <i class="icon-home icon-white"></i> <?php echo __('main'); ?> 
        </a>
    </li>
    <?php foreach($categories as $cat): ?>
        <li>
            <a 
            href="<?php echo url_for('@category?category='.$cat->getUrl()); ?>"
            <?php if($en_cat == $cat->getUrl()): ?>class="active"<?php endif; ?> 
            > 
            <?php echo $cat->getName(); ?> 
            </a>
            <?php 
                $subs = $cat->getSubs(); 
                if ($subs && count($subs) > 0 ): 
            ?>
            <ul class="subnav">
                <?php foreach($subs as $sub): ?>
                <li>
                    <a href="<?php echo url_for('@category?category='.$sub->getUrl()); ?>" > 
                        <i class="icon-bookmark icon-white"></i> <?php echo $sub->getName(); ?> 
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
	</li>
    <?php endforeach; ?>
    
    
 
    <li>
	<a href="<?php echo url_for('@about'); ?>" 
           <?php if($module == 'about'): ?>class="active"<?php endif; ?>
        > 
	    <?php echo __('about'); ?> 
	</a>
    </li>
</ul>