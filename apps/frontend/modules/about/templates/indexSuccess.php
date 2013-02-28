<article id="about">
    <h2 class="title">
        <?php echo __('about'); ?>
        <?php if ($sf_user->hasCredential('admin')): ?>
        <?php echo link_to('<i class="icon-edit"></i>', '@edit_about'); ?>
        <?php endif; ?>
    </h2>

    <div class="description">
        <?php echo htmlspecialchars_decode($about->getDescription());?>
    </div>
    <div class="row-fluid">
        <div class="span9 offset2 contacts">
            <?php if ( $about->getPhone() ): ?>
                <div class="phone"><?php echo $about->getPhone(); ?></div>
            <?php endif; ?>
            <?php if ( $about->getFax() ): ?>
                <div class="fax"><?php echo $about->getFax(); ?></div>
            <?php endif; ?>
            <?php if ( $about->getEmail() ): ?>
                <div class="email"><?php echo $about->getEmail(); ?></div>
            <?php endif; ?>
            <?php if ( $about->getAdress() ): ?>
                <div class="address"><?php echo $about->getAdress(); ?></div>
            <?php endif; ?>
            <?php if ( $about->getSkype() ): ?>
                <div class="skype"><?php echo $about->getSkype(); ?></div>
            <?php endif; ?>    
            <?php if ( $about->getIcq() ): ?>
                 <div class="icq"><?php echo $about->getIcq(); ?></div>
            <?php endif; ?>
        </div>
        <div class="span6">
            
        </div>
    </div>
    
</article>