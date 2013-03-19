<nav id="right_menu">
    <span id="hide_right">
        <i class="icon-arrow-right"></i>
    </span>
    <ul class="nav nav-tabs nav-stacked">
        <!--<li class="nav-header"><?php echo __('adds_new') ?></li>-->
        <li>
            <a href="<?php echo url_for('@new_category') ?>" >
                <i class="icon-plus"></i> <?php echo __('new_category'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo url_for('@new_article') ?>" >
                <i class="icon-plus"></i> <?php echo __('new_article'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo url_for('@reclame') ?>" >
                <i class="icon-globe"></i> <?php echo __('reclame_blocks'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo url_for('@edit_about') ?>" >
                <i class="icon-edit"></i> <?php echo __('edit_about'); ?>
            </a>
        </li>
        <li>
            <a href="/admin.php" target="_blank">
                <i class="icon-cog"></i> <?php echo __('admin_panel'); ?>
            </a>
        </li>
    </ul>
</nav>