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

    if ( $('article .content').length > 0 ) {    
        $.each( $('.content img'), function(n, img){
            var new_img = prepareImgForGallery(img, 'content_img');
            $(img).after(new_img);
            $(img).remove();
        });

        $('article .content .content_img').colorbox({ rel: 'content', maxWidth: '80%', maxHeight:'90%'});
        $('#article_logo_view').colorbox({ rel: 'logo', maxWidth: '80%', maxHeight:'90%' });
    }
    
    if ( $('#content .cat_descr').length > 0 ) {
        $.each( $('.cat_descr img'), function(n, img){
            var new_img = prepareImgForGallery(img, 'cat_descr_img');
            $(img).after(new_img);
            $(img).remove();
        });
        
        $('.cat_descr_img').colorbox({ rel: 'cat_descr', maxWidth: '80%', maxHeight:'90%'});
    }
    
    if ( $('#description-main').length > 0 ) {
        $.each( $('#description-main img'), function(n, img){
            var newImg = prepareImgForGallery(img, 'main_descr_img');
            $(img).after( newImg );
            $(img).remove();
        });
        
        $('.main_descr_img').colorbox({ rel: 'main_descr', maxWidth: '80%', maxHeight:'95%' });
    }
    
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

    $('.description a, .content a').attr('target', '_blank');
      
    setValidator('article_url', /^[а-яА-Яa-zA-Z_0-9-]*$/i);
    setValidator('category_url', /^[а-яА-Яa-zA-Z_0-9-]*$/i);

    CKEDITOR.replaceClass = 'editor';
    
    if ( $('#reclame_html').length > 0 ) {
        CKEDITOR.replace( 'reclame_html', {
            filebrowserBrowseUrl : '/js/ckeditor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/js/ckeditor/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : '/js/ckeditor/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : '/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            plugins : 'dialogui,dialog,dialogadvtab,basicstyles,bidi,blockquote,clipboard,button,panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,div,resize,toolbar,elementspath,list,indent,enterkey,entities,popup,filebrowser,find,fakeobjects,flash,floatingspace,listblock,richcombo,font,forms,format,htmlwriter,horizontalrule,iframe,wysiwygarea,image,smiley,justify,link,liststyle,magicline,maximize,newpage,pagebreak,pastetext,pastefromword,preview,print,removeformat,save,selectall,showblocks,showborders,sourcearea,specialchar,menubutton,scayt,stylescombo,tab,table,tabletools,undo,wsc,htmlbuttons,maxheight,mediaembed,oembed',
            skin : 'moono',
            defaultLanguage : 'ru',
            contentsLanguage : getLanguage(),
            language : getLanguage(),
            width : '100%',
            contentsCss : '../css/main.css',
            toolbarCanCollapse : true,
            enterMode : CKEDITOR.ENTER_BR,
            fontSize_defaultLabel : '12px'
        });
    }
    
    $('#login_link, #logout_link').tooltip({
        animation: true,
        placement: 'right',
        trigger: 'hover'
    });

    $('#sitemap_link').tooltip({
        animation: true,
        placement: 'bottom',
        trigger: 'hover'
    });

    $('#wrapper_404 .links a').tooltip({ animation: true, placement: 'bottom', trigger: 'hover' });

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
    ddsmoothmenu.init({
        mainmenuid: "menu", //menu DIV id
        orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsmoothmenu', //class added to menu's outer DIV
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    })

    // alerts hides by timeout
    setTimeout(function (){ $('#alerts').fadeOut();}, 3000);

    
});

function prepareImgForGallery( img, imgClass ) 
{
    if ( $(img).attr('src') != '' ) {
        
        var new_img = '<a href="'+$(img).attr('src')+'" class="'+imgClass+'">';
        new_img += '<img src="'+$(img).attr('src')+'"';
        
        if ( $(img).attr('style') != '' ) {
            new_img += 'style="'+$(img).attr('style')+'"';
        }
        
        if ( $(img).attr('width') ) {
            new_img += 'width="'+$(img).attr('width')+'"';
        }
        
        if ( $(img).attr('height') ) {
            new_img += 'height="'+$(img).attr('height')+'"';
        }
        
        new_img += ' />';
        new_img += '</a>';
        
        return new_img;
    } else {
        return false;
    }
    
}

function showSubMenu () 
{
   if ( $(this).parent().find("ul.subnav").css('display') != 'block' ) {
    $(this).parent().find("ul.subnav").slideDown(250).show(); 

    $(this).parent().hover(function() {
    }, function(){	
            $(this).parent().find("ul.subnav").slideUp(400); 
    });
   }
} 

function getLanguage()
{
    return $('#languages .flag.active').attr('data-lan');
}

function setValidator(id, regex) 
{
    $('#'+id).keyup(function(){
        var val = $(this).val();
        if ( regex.test(val) == false ) {
            $(this).val( val.substr( 0, val.length-1 ) );
        };
    });
}


