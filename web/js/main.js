document.createElement("article");  
document.createElement("footer");  
document.createElement("header");  
document.createElement("hgroup");  
document.createElement("nav");  
document.createElement("menu"); 
document.createElement("section");

$('document').ready(function(){
//    $('.modal').modal('show');

   CKEDITOR.replaceClass = 'editor';
   
   $('#login_link, #logout_link').tooltip({
       animation: true,
       placement: 'right',
       trigger: 'hover'
   });
   
   $('#hide_right').click(function(){
       if( $(this).parents('#right').css('margin-left') == '-210px' ) {
        $('#hide_right').parents('#right').animate({'margin-left': 0}, 200);
        $('#hide_right').find('i').removeClass('icon-arrow-right').addClass('icon-arrow-left');
       } else {
        $('#hide_right').parents('#right').animate({'margin-left': -210}, 200);
        $('#hide_right').find('i').removeClass('icon-arrow-left').addClass('icon-arrow-right');
       }
   });
   
   //menu 
   $("ul.subnav").parent().append("<span></span>");
   $("ul.topnav li span").click(showSubMenu)
    .hover(function() { $(this).addClass("subhover"); }, function(){ $(this).removeClass("subhover"); });
   $("ul.topnav li a").hover(showSubMenu);
   
   //alerts
   setTimeout(function (){ $('#alerts').fadeOut();}, 3000);
});

function showSubMenu () {
   if ( $(this).parent().find("ul.subnav").css('display') != 'block' ) {
    $(this).parent().find("ul.subnav").slideDown('fast').show(); 

    $(this).parent().hover(function() {
    }, function(){	
            $(this).parent().find("ul.subnav").slideUp('slow'); 
    });
   }
} 

function getLanguage(){
    return $('#languages .flag.active').attr('data-lan');
}