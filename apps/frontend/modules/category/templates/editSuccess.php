<div class="title">
    <?php echo __('editing_category') . ' "' . $cat->getName() .'"';  ?>
    <?php if ($sf_user->hasCredential('admin')): ?>
        <?php echo link_to('<i class="icon-trash"></i>', '@delete_category?url='.$cat->geturl(), array('confirm'=>__('are_youshure_delete'))); ?>
    <?php endif; ?>
</div>
<form action="<?php echo url_for('@edit_category?url='.$cat->getUrl()); ?>" method="POST" name="<?php echo $form->getName() ?>">
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
        <div class="span6">
            <div class="form_row <?php if ($form['parent_id']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['parent_id']->renderLabel(); ?>
                </div>
                <?php if ($form['parent_id']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['parent_id']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['parent_id']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['url']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['url']->renderLabel(); ?>
                </div>
                <?php if ($form['url']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['url']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['url']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['on_main']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['on_main']->renderLabel(); ?>
                </div>
                <div class="form_edit">
                    <?php echo $form['on_main']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="form_row <?php if ($form['ru']['name']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['ru']['name']->renderLabel(); ?>
                </div>
                <?php if ($form['ru']['name']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['ru']['name']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['ru']['name']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['uk']['name']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['uk']['name']->renderLabel(); ?>
                </div>
                <?php if ($form['uk']['name']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['uk']['name']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['uk']['name']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['en']['name']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['en']['name']->renderLabel(); ?>
                </div>
                <?php if ($form['en']['name']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['en']['name']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['en']['name']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form_row <?php if ($form['ru']['description']->rendererror()) echo 'control-group error' ?>">
            <div class="form_label" style="margin-top: 20px;">
                <?php echo $form['ru']['description']->renderLabel(); ?>
            </div>
            <?php if ($form['ru']['description']->rendererror()): ?>
                <div class="alert alert-error"><?php echo $form['ru']['description']->rendererror(); ?></div>
            <?php endif; ?>
            <div class="form_edit">
                <?php echo $form['ru']['description']->render(array('style'=>"width: 80%;", 'class'=>'editor')); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form_row <?php if ($form['uk']['description']->rendererror()) echo 'control-group error' ?>">
            <div class="form_label" style="margin-top: 20px;">
                <?php echo $form['uk']['description']->renderLabel(); ?>
            </div>
            <?php if ($form['uk']['description']->rendererror()): ?>
                <div class="alert alert-error"><?php echo $form['uk']['description']->rendererror(); ?></div>
            <?php endif; ?>
            <div class="form_edit">
                <?php echo $form['uk']['description']->render(array('style'=>"width: 80%;", 'class'=>'editor')); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form_row <?php if ($form['en']['description']->rendererror()) echo 'control-group error' ?>">
            <div class="form_label" style="margin-top: 20px;">
                <?php echo $form['en']['description']->renderLabel(); ?>
            </div>
            <?php if ($form['en']['description']->rendererror()): ?>
                <div class="alert alert-error"><?php echo $form['en']['description']->rendererror(); ?></div>
            <?php endif; ?>
            <div class="form_edit">
                <?php echo $form['en']['description']->render(array( 'style'=>"width: 80%;", 'class'=>'editor')); ?>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button type="submit" class="btn btn-large btn-block btn-success"><?php echo __('save'); ?></button>
    </div>
</form>