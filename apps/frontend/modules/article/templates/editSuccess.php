<div class="title"><?php echo __('edit_article') . ' "' . $article->getTitle() . '"'; ?> </div>
<form action="<?php echo url_for('@edit_article?url='.$article->getUrl()); ?>" method="POST" name="<?php echo $form->getName() ?>" enctype="multipart/form-data">
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
        <?php echo $form['logo']->renderRow(); ?>
    </div>
    <div class="row">
        <div class="span4">
            <div class="form_row <?php if ($form['category_id']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['category_id']->renderLabel(); ?>
                </div>
                <div class="form_edit">
                    <?php echo $form['category_id']->render(array('style'=>'width:83%;')); ?>
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
            <div class="form_row">
                <div class="form_label">
                    <?php echo $form['enabled']->renderLabel(); ?>
                </div>
                <div class="form_edit">
                    <?php echo $form['enabled']->render(); ?>
                </div>
            </div>
        </div>
        <div class="span8">
            <div class="form_row <?php if ($form['ru']['title']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['ru']['title']->renderLabel(); ?>
                </div>
                <?php if ($form['ru']['title']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['ru']['title']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['ru']['title']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['uk']['title']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['uk']['title']->renderLabel(); ?>
                </div>
                <?php if ($form['uk']['title']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['uk']['title']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['uk']['title']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['en']['title']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['en']['title']->renderLabel(); ?>
                </div>
                <?php if ($form['en']['title']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['en']['title']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['en']['title']->render(array('style'=>'width:80%;')); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="span12">
            <div class="form_row <?php if ($form['ru']['content']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['ru']['content']->renderLabel(); ?>
                </div>
                <?php if ($form['ru']['content']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['ru']['content']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['ru']['content']->render(array('style'=>"width: 80%;", 'class'=>'editor')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['uk']['content']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['uk']['content']->renderLabel(); ?>
                </div>
                <?php if ($form['uk']['content']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['uk']['content']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['uk']['content']->render(array('style'=>"width: 80%;", 'class'=>'editor')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['en']['content']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['en']['content']->renderLabel(); ?>
                </div>
                <?php if ($form['en']['content']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['en']['content']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['en']['content']->render(array('style'=>"width: 80%;", 'class'=>'editor')); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="span12">
            <div class="form_row <?php if ($form['ru']['tags']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['ru']['tags']->renderLabel(); ?>
                </div>
                <?php if ($form['ru']['tags']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['ru']['tags']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['ru']['tags']->render(array('style'=>"width: 80%;")); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['uk']['tags']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['uk']['tags']->renderLabel(); ?>
                </div>
                <?php if ($form['uk']['tags']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['uk']['tags']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['uk']['tags']->render(array('style'=>"width: 80%;")); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['en']['tags']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['en']['tags']->renderLabel(); ?>
                </div>
                <?php if ($form['en']['tags']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['en']['tags']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['en']['tags']->render(array('style'=>"width: 80%;")); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="buttons">
        <button type="submit" class="btn btn-large btn-block btn-success"><?php echo __('save'); ?></button>
    </div>
</form>