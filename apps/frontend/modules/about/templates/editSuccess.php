<div class="title">
    <?php echo __('about'); ?>
</div>
<form action="<?php echo url_for('@edit_about'); ?>" method="POST" name="<?php echo $form->getName() ?>">
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
            <div class="form_row <?php if ($form['phone']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['phone']->renderLabel(); ?>
                </div>
                <?php if ($form['phone']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['phone']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['phone']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['fax']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['fax']->renderLabel(); ?>
                </div>
                <?php if ($form['fax']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['fax']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['fax']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['email']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['email']->renderLabel(); ?>
                </div>
                <?php if ($form['email']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['email']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['email']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="form_row <?php if ($form['icq']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['icq']->renderLabel(); ?>
                </div>
                <?php if ($form['icq']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['icq']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['icq']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
            <div class="form_row <?php if ($form['skype']->rendererror()) echo 'control-group error' ?>">
                <div class="form_label">
                    <?php echo $form['skype']->renderLabel(); ?>
                </div>
                <?php if ($form['skype']->rendererror()): ?>
                    <div class="alert alert-error"><?php echo $form['skype']->rendererror(); ?></div>
                <?php endif; ?>
                <div class="form_edit">
                    <?php echo $form['skype']->render(array('style'=>'width:83%;')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <h4><?php echo __('russian'); ?></h4>
            <div class="row-fluid">
                <div class="span6">
                    <div class="form_row <?php if ($form['ru']['title']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['ru']['title']->renderLabel(); ?>
                        </div>
                        <?php if ($form['ru']['title']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['ru']['title']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['ru']['title']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                    <div class="form_row <?php if ($form['ru']['keywords']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['ru']['keywords']->renderLabel(); ?>
                        </div>
                        <?php if ($form['ru']['keywords']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['ru']['keywords']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['ru']['keywords']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="form_row <?php if ($form['ru']['adress']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['ru']['adress']->renderLabel(); ?>
                        </div>
                        <?php if ($form['ru']['adress']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['ru']['adress']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['ru']['adress']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                    <div class="form_row <?php if ($form['ru']['metatags']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['ru']['metatags']->renderLabel(); ?>
                        </div>
                        <?php if ($form['ru']['metatags']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['ru']['metatags']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['ru']['metatags']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                </div>
                <div class="span12">
                    <div class="form_row <?php if ($form['ru']['description']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['ru']['description']->renderLabel(); ?>
                        </div>
                        <?php if ($form['ru']['description']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['ru']['description']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['ru']['description']->render(array('style'=>'width:83%;', 'class'=>'editor')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <h4><?php echo __('ukraine'); ?></h4>
            <div class="row-fluid">
                <div class="span6">
                    <div class="form_row <?php if ($form['uk']['title']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['uk']['title']->renderLabel(); ?>
                        </div>
                        <?php if ($form['uk']['title']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['uk']['title']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['uk']['title']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                    <div class="form_row <?php if ($form['uk']['keywords']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['uk']['keywords']->renderLabel(); ?>
                        </div>
                        <?php if ($form['uk']['keywords']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['uk']['keywords']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['uk']['keywords']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="form_row <?php if ($form['uk']['adress']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['uk']['adress']->renderLabel(); ?>
                        </div>
                        <?php if ($form['uk']['adress']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['uk']['adress']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['uk']['adress']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                    <div class="form_row <?php if ($form['uk']['metatags']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['uk']['metatags']->renderLabel(); ?>
                        </div>
                        <?php if ($form['uk']['metatags']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['uk']['metatags']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['uk']['metatags']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                </div>
                <div class="span12">
                    <div class="form_row <?php if ($form['uk']['description']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['uk']['description']->renderLabel(); ?>
                        </div>
                        <?php if ($form['uk']['description']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['uk']['description']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['uk']['description']->render(array('style'=>'width:83%;', 'class'=>'editor')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <h4><?php echo __('english'); ?></h4>
            <div class="row-fluid">
                <div class="span6">
                    <div class="form_row <?php if ($form['en']['title']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['en']['title']->renderLabel(); ?>
                        </div>
                        <?php if ($form['en']['title']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['en']['title']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['en']['title']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                    <div class="form_row <?php if ($form['en']['keywords']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['en']['keywords']->renderLabel(); ?>
                        </div>
                        <?php if ($form['en']['keywords']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['en']['keywords']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['en']['keywords']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="form_row <?php if ($form['en']['adress']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['en']['adress']->renderLabel(); ?>
                        </div>
                        <?php if ($form['en']['adress']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['en']['adress']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['en']['adress']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                    <div class="form_row <?php if ($form['en']['metatags']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['en']['metatags']->renderLabel(); ?>
                        </div>
                        <?php if ($form['en']['metatags']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['en']['metatags']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['en']['metatags']->render(array('style'=>'width:83%;')); ?>
                        </div>
                    </div>
                </div>
                <div class="span12">
                    <div class="form_row <?php if ($form['en']['description']->rendererror()) echo 'control-group error' ?>">
                        <div class="form_label">
                            <?php echo $form['en']['description']->renderLabel(); ?>
                        </div>
                        <?php if ($form['en']['description']->rendererror()): ?>
                            <div class="alert alert-error"><?php echo $form['en']['description']->rendererror(); ?></div>
                        <?php endif; ?>
                        <div class="form_edit">
                            <?php echo $form['en']['description']->render(array('style'=>'width:83%;', 'class'=>'editor')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button type="submit" class="btn btn-large btn-block btn-success"><?php echo __('save'); ?></button>
    </div>
</form>