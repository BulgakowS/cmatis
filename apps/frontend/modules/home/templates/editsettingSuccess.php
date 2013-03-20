<div class="title">
    <?php echo __('settings');  ?>
</div>
<form action="<?php echo url_for('@edit_setting'); ?>" method="POST" name="<?php echo $form->getName() ?>">
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
        <div class="span4">
            <div class="form_row <?php if ($form['news']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['news']->renderLabel(); ?>
                </div>
                <?php if ($form['news']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['news']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['news']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="form_row <?php if ($form['news_by_category']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['news_by_category']->renderLabel(); ?>
                </div>
                <?php if ($form['news_by_category']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['news_by_category']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['news_by_category']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="form_row <?php if ($form['categories_on_main']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['categories_on_main']->renderLabel(); ?>
                </div>
                <?php if ($form['categories_on_main']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['categories_on_main']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['categories_on_main']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="buttons">
        <button type="submit" class="btn btn-large btn-block btn-success"><?php echo __('save'); ?></button>
    </div>
</form>