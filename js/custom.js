jQuery(document).ready(function($){

  "use strict";

  var navBar=$('.scroll-nav');

  $(window).scroll(function(){
    if($(window).scrollTop()>100){
      navBar.addClass('visibility-1');
    }
    else{
      navBar.removeClass('visibility-1');
    }
  });
  
  $('.navbar .dropdown').hover(function(){
    $(this).find('.dropdown-menu').first().stop(true,true).delay(50).show();
    $(this).addClass('show');
  },
  
  function(){
    $(this).find('.dropdown-menu').first().stop(true,true).delay(50).hide();
    $(this).removeClass('show');
  });

//     $('.dropdown-menu').hover(function(){
//     $(this).parent().find('.nav-link').css({color:'#4d0200'});
//  })
//  $('.dropdown-menu').mouseleave(function(){
//     $(this).parent().find('.nav-link').css({color:''});
//  })
  
//   $('.dropdown-toggle').click(function(){
//     if($(window).width()>1200)
//     if($(this).next('.dropdown-menu').is(':visible'))window.location=$(this).attr('href');
//   });


  $(".dropdown-item").attr('data-bs-dismiss','offcanvas');

});
