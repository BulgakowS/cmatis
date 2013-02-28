<div id="alerts">
    <?php if($sf_user->hasFlash('success')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $sf_user->getFlash('success'); ?>
        </div>
    <?php endif; ?>
    <?php if($sf_user->hasFlash('error')): ?> 
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $sf_user->getFlash('error'); ?>
        </div>
    <?php endif; ?>
</div>

