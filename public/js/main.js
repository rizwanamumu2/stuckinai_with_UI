jQuery(document).ready(function() {
  
    btn = $('#back-top');
 
   $(window).scroll(function() {
     if ($(window).scrollTop() > 300) {
       btn.addClass('vd_back-top');
     } else {
       btn.removeClass('vd_back-top');
     }
   });
 
   btn.on('click', function(e) {
     e.preventDefault();
     $('html, body').animate({scrollTop:0}, '300');
   });
 
   $('[data-action^="click-trigger"]').click(function(e) {
     e.preventDefault();
     if ($(this).parent().hasClass("hover-trigger") && $(this).siblings().hasClass("hover-target")){
         return(0);
     }			
     // check if not children of click-target then slideup
     if ( $(this).parent().parent().parent().data("action") != "click-target" && $(this).parent().parent().parent().parent().parent().data("action") != "click-target"    )  {
         $('[data-action^="click-target"]').slideUp('fast',  function(){ //calculateContentHeight();														
             });				
     } else{
     // check if children of click-target then slideup all the parent kids
         $(this).parent().siblings().children('[data-action^="click-trigger"]').removeClass('open');	
         $(this).parent().siblings().children('[data-action^="click-target"]').slideUp('fast',  function(){//calculateContentHeight(); 
             
             });
                 
     }
     // if this is close
     if (! $(this).hasClass('open')){
 
 
         if ($(this).parent().parent().parent().data("action") != "click-target"){
             $('[data-action^="click-trigger"]').removeClass('open');
         };
         $(this).addClass('open');
         $(this).parent().children('[data-action^="click-target"]').slideDown('fast',  function(){    if ($('.navbar-menu').outerHeight() < $('.navbar-menu .vd_menu').outerHeight() + $('.navbar-spacing ').outerHeight()){calculateContentHeight()};
     
         });	
         
         
     // if this is open			
     } else {
         $(this).removeClass('open');
         // check if children of click-target then slideup				
         //if ($(this).parent().parent().parent().data("action") == "click-target"){
             $(this).parent().children('[data-action^="click-target"]').slideUp('fast',  function(){
                 
             });				
         //}				
     }
     $('body').removeClass('expand-all');
                                 
 });		
 
 });
 
 
 
 
 
 
     
                         