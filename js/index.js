var $j = jQuery.noConflict();

$j(document).ready(function(){
    $j('.post-wrap').slick({
    arrows: true,
	  dots: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 2,
	  arrows: true,
	  prevArrow: $j(".pp2"),
    nextArrow: $j(".nn2"),
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: false
	      }
	    },
	    {
	      breakpoint: 900,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 800,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	$j('.blog-post-wrap').slick({
	  dots: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  arrows: true,
	  nextArrow: $j('.bppa'),
	  prevArrow: $j('.bpna'),
	  responsive: [
	    {
	      breakpoint: 900,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: false
	      }
	    },
	    {
	      breakpoint: 800,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 700,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

    /*
	$j('').slick({
	  dots: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  nextArrow: $j('.blog-post-prev'),
	  prevArrow: $j('.blog-post-next')
	});
	*/
});
  
