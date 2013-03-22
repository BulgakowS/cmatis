<div id="menu" >   
    
    
    <nav id="menu_controlls"> 
        
        <?php if (!$sf_user->isAuthenticated()): ?>
          <a href="<?php echo url_for('@login'); ?>" id="login_link" data-title="<?php echo __('login') ?>"><i class="icon-off icon-white"></i></a>
        <?php else: ?>
          <a href="<?php echo url_for('@logout'); ?>" id="logout_link" data-title="<?php echo __('logout') ?>"><i class="icon-off icon-white"></i></a>
        <?php endif; ?>
        
        <?php echo link_to('&nbsp;', '@site_map', array('data-title'=>__('site_tree'), 'id'=>"sitemap_link")); ?> 
    </nav>
    
    
    <ul class="topnav">
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
                <?php if ( count($cat->getSubs()) > 0 ): ?>
                    <ul class="subnav">
                        <?php foreach($cat->getSubs() as $sub): ?>
                        <li>
                            <a href="<?php echo url_for('@category?category='.$sub->getUrl()); ?>" 
                                <?php if($en_cat == $cat->getUrl()): ?>class="active"<?php endif; ?>
                               > 
                                  <?php echo $sub->getName(); ?> 
                            </a>
                            <?php if ( count($sub->getSubs()) > 0 ): ?>
                                <ul class="subnav">
                                    <?php foreach($sub->getSubs() as $sub1): ?>
                                    <li>
                                        <a href="<?php echo url_for('@category?category='.$sub1->getUrl()); ?>" 
                                           <?php if($en_cat == $cat->getUrl()): ?>class="active"<?php endif; ?>
                                           > 
                                              <?php echo $sub1->getName(); ?> 
                                        </a>
                                        <?php if ( count($sub1->getSubs()) > 0 ): ?>
                                            <ul class="subnav">
                                                <?php foreach($sub1->getSubs() as $sub2): ?>
                                                <li>
                                                    <a href="<?php echo url_for('@category?category='.$sub2->getUrl()); ?>" 
                                                       <?php if($en_cat == $cat->getUrl()): ?>class="active"<?php endif; ?>
                                                       > 
                                                          <?php echo $sub2->getName(); ?> 
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
</div>