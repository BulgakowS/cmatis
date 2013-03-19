<ul id="menu" class="topnav">
    <li>
        <a href="<?php echo url_for('@homepage'); ?>" > 
            <i class="icon-home icon-white"></i> <?php echo __('main'); ?> 
        </a>
    </li>
    
    <?php foreach($categories as $cat): ?>
        <li>
            <a href="<?php echo url_for('@category?category='.$cat->getUrl()); ?>"
                <?php if($en_cat == $cat->getUrl()): ?>class="active"<?php endif; ?> 
            > 
                <?php echo $cat->getName(); ?> 
            </a>
            <?php 
                if ( $cat->getChieldscount() > 0 ): 
            ?>
            <ul class="subnav">
                <?php foreach($cat->getSubs() as $sub): ?>
                <li>
                    <a href="<?php echo url_for('@category?category='.$sub->getUrl()); ?>" > 
                          <?php echo $sub->getName(); ?> 
                    </a>
                    <?php 
                        if ( $sub->getChieldscount() > 0 ): 
                    ?>
                    <ul>
                        <?php foreach($sub->getSubs() as $sub1): ?>
                        <li>
                            <a href="<?php echo url_for('@category?category='.$sub1->getUrl()); ?>" > 
                                  <?php echo $sub1->getName(); ?> 
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
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