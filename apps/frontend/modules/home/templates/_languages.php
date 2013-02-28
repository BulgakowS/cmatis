<?php $cu = $sf_user->getCulture(); ?>
<a href="<?php echo url_for('@change_language?language=ru') ?>" data-lan="ru" class="ru flag <?php echo $cu == 'ru' ? 'active' : ''; ?>" >&nbsp;</a>
<a href="<?php echo url_for('@change_language?language=uk') ?>" data-lan="uk" class="uk flag <?php echo $cu == 'uk' ? 'active' : ''; ?>" >&nbsp;</a>
<a href="<?php echo url_for('@change_language?language=en') ?>" data-lan="en" class="en flag <?php echo $cu == 'en' ? 'active' : ''; ?>" >&nbsp;</a>

<?php //echo link_to('&nbsp;', '@change_language?language=ru', array('class'=>'ru flag', 'alt'=>'ru')); ?>
<?php // echo link_to('&nbsp;', '@change_language?language=uk', array('class'=>'uk flag', 'alt'=>'ukr')); ?>
<?php // echo link_to('&nbsp;', '@change_language?language=en', array('class'=>'en flag', 'alt'=>'en')); ?>
