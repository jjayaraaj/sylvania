$(document).ready(function(){
  $('#main_banner').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
	  dots: true,
    responsive:{
        0:{
            items:1,
           
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:1,
          
            loop:false
        }
    }
});
			

			  $('#second_banner').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
	dots:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
});
			
			
});// JavaScript Document