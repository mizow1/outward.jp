/*-----------------------------------------------------------------------------------

	Custom JS - All front-end jQuery

-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	MV
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){


	$('#mv_slide').slick({
		accessibility:false,
		autoplay:true,
		autoplaySpeed:3000,
		speed:3000,
		pauseOnHover:false,
		centerMode: true,
		dots:false,
		fade:true,
		infinite:true,
		arrows:false,
		responsive: [
	    {
	      breakpoint: 641,
	      settings: {
					arrows:false,
					slidesToShow: 1,
					centerMode: true,
	      	}
    		}
			]
	});
});



/*-----------------------------------------------------------------------------------*/
/*	SLIDER
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){


	$('#slider').slick({
		dots: false,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true, //要素を中央寄せ
		centerPadding:'150px', //両サイドの見えている部分のサイズ
		variableWidth: true,
		autoplay:true, //自動再生
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
	    {
	      breakpoint: 641,
	      settings: {
					arrows:false,
					slidesToShow: 1,
					centerMode: true, //要素を中央寄せ
					centerPadding:'18%', //両サイドの見えている部分のサイズ
					variableWidth: false,
	      	}
    		}
			]
	});
});

/*-----------------------------------------------------------------------------------*/
/*	simpleTicker
/*-----------------------------------------------------------------------------------*/
$(function(){
  $.simpleTicker($('#new_arrival_ticker'),{'effectType':'roll'});
});


/*-----------------------------------------------------------------------------------*/
/*	トップページSP会社概要
/*-----------------------------------------------------------------------------------*/
var contents_item_type01 = 0
var contents_item_type02 = 0
var contents_item_type03 = 0

var contents_item_type01_pos = 0
var contents_item_type02_pos = 0
var contents_item_type03_pos = 0


  $(window).scroll(function(){
	 	var topPos = $(window).scrollTop();
		var w_height = $(window).height();
		var w_width = $(window).width();
		var w_sp = 640;


		if($('.contents_item_type01').length){
      var contents_item_type01_pos = $('.contents_item_type01').offset().top;
    }
		if($('.contents_item_type02').length){
      var contents_item_type02_pos = $('.contents_item_type02').offset().top;
    }
		if($('.contents_item_type03').length){
			var contents_item_type03_pos = $('.contents_item_type03').offset().top;
		}

    if(w_width <= w_sp){
			if(topPos + w_height> contents_item_type01_pos && contents_item_type01 == 0){
				$(function(){
					$('.campany_contents .contents_item_type01').animate({'opacity':'1'},1000).animate({
						'left': '0%'
					},{
						duration: 800,
						queue: false //←★ココがqueue
					});
				});
				contents_item_type01 = 1;
			}
			if(topPos + w_height> contents_item_type02_pos && contents_item_type02 == 0){
				$(function(){
					$('.campany_contents .contents_item_type02').animate({'opacity':'1'},1500).animate({
						'left': '0%'
					},{
						duration: 800,
						queue: false //←★ココがqueue
					});
				});
				contents_item_type02 = 1;
			}
			if(topPos + w_height> contents_item_type03_pos && contents_item_type03 == 0){
				$(function(){
					$('.campany_contents .contents_item_type03').animate({'opacity':'1'},1000).animate({
						'left': '0%'
					},{
						duration: 800,
						queue: false //←★ココがqueue
					});
				});
				contents_item_type03 = 1;
			}
		}




	});
