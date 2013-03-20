<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" id="signin_form">
    <?php echo $form->renderHiddenFields(); ?>
    
    <div class="row-fluid">
        <div class="span4"><label> <?php echo __('Username or E-Mail', null, 'sf_guard'); ?> </label></div>
        <div class="span4"><?php echo $form['username']->render(); ?></div>
    </div>
    <div class="row-fluid">
        <div class="span4"><label> <?php echo __('Password', null, 'sf_guard'); ?> </label></div>
        <div class="span4"><?php echo $form['password']->render(); ?></div>
    </div>
    <div class="row-fluid">
        <div class="span4"><label> <?php echo __('Remember', null, 'sf_guard'); ?> </label></div>
        <div class="span4"><?php echo $form['remember']->render(); ?></div>
    </div>
    <BR />
    <input type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" class="btn btn-block btn-success" />

    <?php $routes = $sf_context->getRouting()->getRoutes() ?>
    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
      <!--<a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>-->
    <?php endif; ?>

    <?php if (isset($routes['sf_guard_register'])): ?>
      <!--&nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>-->
    <?php endif; ?>
</form>