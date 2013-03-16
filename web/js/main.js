document.createElement("article");  
document.createElement("footer");  
document.createElement("header");  
document.createElement("hgroup");  
document.createElement("nav");  
document.createElement("menu"); 
document.createElement("section");

function checklanguageArticle( form_name, lan ){
    
    if ( $('#'+form_name+'_'+lan+'_lan_enable').is(':checked') ) {
        $('#'+form_name+'_'+lan+'_title, #'+form_name+'_'+lan+'_name, #'+form_name+'_' + lan + '_tags').attr('disabled', false); 
        $('#'+form_name+'_'+lan+'_content, #'+form_name+'_'+lan+'_description').parents('.form_row').slideDown();
        $('#'+form_name+'_'+lan+'_title, #'+form_name+'_'+lan+'_name').attr('required', true);
    } else {
        $('#'+form_name+'_'+lan+'_title, #'+form_name+'_'+lan+'_name, #'+form_name+'_' + lan + '_tags').attr('disabled', true);
        $('#'+form_name+'_'+lan+'_content, #'+form_name+'_'+lan+'_description').parents('.form_row').slideUp();
        $('#'+form_name+'_'+lan+'_title, #'+form_name+'_'+lan+'_name').attr('required', false);
    }
}

$('document').ready(function(){
//    $('.modal').modal('show');

    // prepare content photos for gallery
    if ( $('article .content').length > 0 ) {
        
        $.each( $('.content img'), function(n, img){
            var new_img = '<a href="'+$(img).attr('src')+'" class="content_img">';
            new_img += '<img src="'+$(img).attr('src')+'"';
            if ( $(img).attr('style') != '' ) {
                new_img += 'style="'+$(img).attr('style')+'"';
            }
            new_img += ' />';
            new_img += '</a>';
            $(img).after(new_img);
            $(img).remove();
        });
        
        // image preview
        $('article .content .content_img').colorbox({ 
            rel: 'content', 
            maxWidth: '80%', 
            maxHeight:'90%',
            href: $(this).attr('src')
        });
        
        $('#article_logo_view').colorbox({ 
            rel: 'logo', 
            maxWidth: '80%', 
            maxHeight:'90%' 
        });
    }
    
    // edit/new forms
   if ( $('form[name="article"]').length > 0 ) {
       $.each(['ru','uk','en'], function(n,v) {
           checklanguageArticle( 'article',  v);
           $('#article_' + v + '_lan_enable').click(function(){
               checklanguageArticle( 'article', v );
           });
       });        
   } 
   
   if ( $('form[name="category"]').length > 0 ) {
       $.each(['ru','uk','en'], function(n,v) {
           checklanguageArticle( 'category',  v);
           $('#category_' + v + '_lan_enable').click(function(){
               checklanguageArticle( 'category', v );
           });
       });        
   } 

   // make links in articles to open in new window
   $('.description a, .content a').attr('target', '_blank');
      
   // validators for url fields
   setValidator('article_url', /^[а-яА-Яa-zA-Z_0-9-]*$/i);
   setValidator('category_url', /^[а-яА-Яa-zA-Z_0-9-]*$/i);
   
   // set CKeditor
   CKEDITOR.replaceClass = 'editor';
   
   // tooltip for login button
   $('#login_link, #logout_link').tooltip({
       animation: true,
       placement: 'right',
       trigger: 'hover'
   });
   
   $('#wrapper_404 .links a').tooltip({
       animation: true,
       placement: 'bottom',
       trigger: 'hover'
   });
   
   // right menu
   $('#hide_right').click(function(){
       if( $(this).parents('#right').css('margin-left') == '-210px' ) {
        $('#hide_right').parents('#right').animate({'margin-left': 0}, 200);
        $('#hide_right').find('i').removeClass('icon-arrow-right').addClass('icon-arrow-left');
       } else {
        $('#hide_right').parents('#right').animate({'margin-left': -210}, 200);
        $('#hide_right').find('i').removeClass('icon-arrow-left').addClass('icon-arrow-right');
       }
   });
   
   // menu 
   $("ul.subnav").parent().append("<span></span>");
   $("ul.topnav li span").click(showSubMenu)
    .hover(
        function() { $(this).addClass("subhover"); }, 
        function(){ $(this).removeClass("subhover"); }
    );
   $("ul.topnav li a").hover(showSubMenu);
   
   // alerts hides by timeout
   setTimeout(function (){ $('#alerts').fadeOut();}, 3000);
});

function showSubMenu () {
   if ( $(this).parent().find("ul.subnav").css('display') != 'block' ) {
    $(this).parent().find("ul.subnav").slideDown(250).show(); 

    $(this).parent().hover(function() {
    }, function(){	
            $(this).parent().find("ul.subnav").slideUp(400); 
    });
   }
} 

function getLanguage(){
    return $('#languages .flag.active').attr('data-lan');
}

function setValidator(id, regex) {
    
    $('#'+id).keyup(function(){
        var val = $(this).val();
        if ( regex.test(val) == false ) {
            $(this).val( val.substr( 0, val.length-1 ) );
        };
    });
    
//  var element = document.getElementById(id);
//  if (element) {
//    var lastValue = element.value;
//    if (!regex.test(lastValue))
//      lastValue = '';
//    setInterval(function() {
//      var value = element.value;
//      if (value != lastValue) {
//        if (regex.test(value))
//          lastValue = value;
//        else
//          element.value = lastValue;
//      }
//    }, 10);
//  }
}
