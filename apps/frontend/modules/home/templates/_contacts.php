<?php if ($about){ 
    $all = '';
    if ( $about->getPhone() ){
        $all .= ' <span class="contact-phone">' . $about->getPhone() . '</span>';
    }
    if ( $about->getFax() ){
        $all .= ' <span class="contact-fax">' . $about->getFax() . '</span>';
    }
    if ( $about->getEmail() ){
        $all .= ' <span class="contact-mail">' . $about->getEmail() . '</span>';
    }
    if ( $about->getSkype() ){
        $all .= ' <span class="contact-skype">' . $about->getSkype() . '</span>';
    }    
    if ( $about->getIcq() ){
        $all .= ' <span class="contact-icq">' . $about->getIcq() . '</span>';
    }  
    
    echo $all;
}

