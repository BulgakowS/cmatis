<div class="title">
    <?php echo __('edit_reclame') . ' "' . __($recl->getTitle()) . '"'; ?>
</div>

<form action="<?php echo url_for('@edit_reclame?id='.$recl->getId()); ?>" method="POST" id="reclame_form">
    <?php 
        echo $form->renderHiddenFields();
    ?>
    <?php if ($form->renderGlobalErrors()): ?>
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $form->renderGlobalErrors(); ?>
    </div>
    <?php endif; ?>
    
    
    <div class="row">
        <div class="span12">
            <div class="form_label">
                <?php echo $form['html']->renderLabel(); ?>
            </div>
            <div class="form_edit">
                <?php echo $form['html']->render(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span8">
            <div class="form_label">
                <label><?php echo __('reclame_size'); ?></label>
            </div>
            <div class="form_edit">
                <?php echo $form['width']->render(); ?> <i class="icon-remove"></i> <?php echo $form['height']->render(); ?>
            </div>
        </div>
        <div class="span4">
            <div class="form_label">
                <?php echo $form['enabled']->renderLabel(); ?>
            </div>
            <div class="form_edit">
                <?php echo $form['enabled']->render(); ?>
            </div>
        </div>
    </div>
    
    

    <div class="buttons">
        <button type="submit" class="btn btn-large btn-block btn-success"><?php echo __('save'); ?></button>
    </div>
</form>