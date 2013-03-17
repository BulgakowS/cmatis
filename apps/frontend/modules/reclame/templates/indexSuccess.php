<div class="title">
    <?php echo __('reclame_blocks'); ?>
</div>

<?php if ($reclams && count($reclams) > 0): ?>
    <div class="cat_articles">
        <ul>
        <?php foreach($reclams as $reclame): ?>
            <li>
                <a href="<?php echo url_for('@edit_reclame?id='.$reclame->getid()); ?>" >
                    <div class="text"><?php echo __($reclame->getTitle()); ?></div>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>