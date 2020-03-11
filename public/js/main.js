jQuery(document).ready(function() {
  
    /* ======= Page preloader ======= */
    $(document).ready(function() {
      //Preloader
      preloaderFadeOutTime = 1000;
      function hidePreloader() {
      var preloader = $('.spinner_wrapper');
      preloader.delay(preloaderFadeOutTime);
      preloader.fadeOut(preloaderFadeOutTime);
      }
      hidePreloader();
      });


 
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
 
 


 function browserSupportsCSSProperty(propertyName) {
  var elm = document.createElement('div');
  propertyName = propertyName.toLowerCase();

  if (elm.style[propertyName] != undefined)
    return true;

  var propertyNameCapital = propertyName.charAt(0).toUpperCase() + propertyName.substr(1),
    domPrefixes = 'Webkit Moz ms O'.split(' ');

  for (var i = 0; i < domPrefixes.length; i++) {
    if (elm.style[domPrefixes[i] + propertyNameCapital] != undefined)
      return true;
  }

  return false;
}

if (!browserSupportsCSSProperty('animation')) {
  // fallback…
}
});