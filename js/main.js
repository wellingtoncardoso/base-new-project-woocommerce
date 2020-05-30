jQuery(document).ready(function($) {
	// Mask
	$('#billing_birthdate').mask('00/00/0000');
	$('#billing_postcode').mask('00000-000');
	$('#billing_phone').mask('(00) 00000-0000');
  
  //fixed nav
    $(document).on( 'scroll', function(){
      if ($(window).scrollTop() > 170) {
        $('.nav-top').addClass('fixa');
      } else {
        $('.nav-top').removeClass('fixa');
      }
  });

  //anime scroll
    //debounce do lodash
  debounce = function(func, wait, immediate){
    var timeout;
    return function(){
      var context = this, args = arguments;
      var later = function(){
        timeout = null;
        if(!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if(callNow) func.apply(context, args);
    };
  };
 //anime 
  (function(){
    var $target = $('.anime'),
    animationClass = 'anime-start',
    offset = $(window).height() * 3/4;

    function animeScroll(){
      var documentTop = $(document).scrollTop();
      
      $target.each(function(){
        var itemTop = $(this).offset().top;
        if(documentTop > itemTop - offset){
          $(this).addClass(animationClass);
        }else{
          $(this).removeClass(animationClass);
        }
      });
    }
    animeScroll();

    $(document).scroll(debounce(function(){
      animeScroll();
    }, 100));
  }());
   //anime invert
  (function(){
    var $target = $('.anime-invert'),
    animationClass = 'anime-start',
    offset = $(window).height() * 3/4;

    function animeScroll(){
      var documentTop = $(document).scrollTop();
      
      $target.each(function(){
        var itemTop = $(this).offset().top;
        if(documentTop > itemTop - offset){
          $(this).addClass(animationClass);
        }else{
          $(this).removeClass(animationClass);
        }
      });
    }
    animeScroll();

    $(document).scroll(debounce(function(){
      animeScroll();
    }, 100));
  }());


//


});
