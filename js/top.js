/*-----------------------------------------------------------------------------------

	Custom JS - All front-end jQuery

-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	MV
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){


	$('#mv_slide').slick({
		dots: false,
		arrows:false,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true, //要素を中央寄せ
		centerPadding:'150px', //両サイドの見えている部分のサイズ
		variableWidth: true,
		autoplay:true, //自動再生
		autoplaySpeed: 3000,
		speed: 2000,
		responsive: [
	    {
	      breakpoint: 641,
	      settings: {
					fade:true,
					arrows:false,
					slidesToShow: 1,
					centerMode: true, //要素を中央寄せ
					centerPadding:'0', //両サイドの見えている部分のサイズ
					variableWidth: false,
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
		autoplaySpeed: 3000,
		responsive: [
	    {
	      breakpoint: 641,
	      settings: {
					arrows:false,
					slidesToShow: 1,
					centerMode: true, //要素を中央寄せ
					centerPadding:'10%', //両サイドの見えている部分のサイズ
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
var contents_item_type01 = 0;
var contents_item_type02 = 0;
var contents_item_type03 = 0;
var service_main = 0;


var contents_item_type01_pos = 0;
var contents_item_type02_pos = 0;
var contents_item_type03_pos = 0;
var service_main_pos = 0;

  $(window).scroll(function(){
	 	var topPos = $(window).scrollTop();
		var w_height = $(window).height();
		var w_width = $(window).width();
		var w_sp = 640;

// psition
// -----------------------------------------------------------------------------
		/* 会社概要(company) */
		if($('.contents_item_type01').length){
      var contents_item_type01_pos = $('.contents_item_type01').offset().top;
    }
		if($('.contents_item_type02').length){
      var contents_item_type02_pos = $('.contents_item_type02').offset().top;
    }
		if($('.contents_item_type03').length){
			var contents_item_type03_pos = $('.contents_item_type03').offset().top;
		}
		/* 事業内容(SERVICE) */
		if($('.service_main_02').length){
			var service_main_pos = $('.service_main_02').offset().top;
		}


// function
// -----------------------------------------------------------------------------
		/* 会社概要(company) */
    if(w_width <= w_sp){
			if(topPos + w_height> contents_item_type01_pos && contents_item_type01 == 0){
				$(function(){
					$('.campany_contents .contents_item_type01').animate({'opacity':'1'},1000).animate({
						'left': '0%'
					},{
						duration: 800,
						queue: false
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
						queue: false
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
						queue: false
					});
				});
				contents_item_type03 = 1;
			}
		}

		/* 事業内容(SERVICE) */
		if(w_width > w_sp){
			if(topPos + w_height> service_main_pos && service_main == 0){
				$(function(){
					$('.service_main_phone').animate({'opacity':'1'},800).animate({
						'margin-left': '-120px'
					},{
						duration: 800,
						queue: false
					});

					$('.service_main_title').delay(500).animate({'opacity':'1'},800).animate({
						'right': '-100px'
					},{
						duration: 1100,
						queue: false
					});
					$('.service_main_01').delay(800).animate({'opacity':'1'},800).animate({
						'right': '-100px'
					},{
						duration: 1400,
						queue: false
					});
					$('.service_main_02').delay(1100).animate({'opacity':'1'},800).animate({
						'right': '-60px'
					},{
						duration: 1700,
						queue: false
					});
					$('.service_main_03').delay(1400).animate({'opacity':'1'},800).animate({
						'right': '-20px'
					},{
						duration: 2000,
						queue: false
					});
				});
				service_main = 1;
			}
		}


	});
