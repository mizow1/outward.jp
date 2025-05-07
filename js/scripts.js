/*-----------------------------------------------------------------------------------

	Custom JS - All front-end jQuery

-------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/*	gnav プルダウン
/*-----------------------------------------------------------------------------------*/
$(function(){
    $('#global_nav .gnav_item').hover(function(){
        $("ul:not(:animated)", this).slideDown(0);
    }, function(){
        $("ul.gnav_sub_list",this).slideUp(0);
    });
});


/*-----------------------------------------------------------------------------------*/
/*	SP_MENU
/*-----------------------------------------------------------------------------------*/
$(function() {

  $('#js_nav_icon').click(function() {
    $(this).toggleClass("active");
		if($(this).hasClass('active')) {
			$('.sp_header_nav').addClass('active');
      var navHeight = $('.sp_header_nav').innerHeight();
      $('body').css({'overflow':'hidden','height':'100%'});
		} else {
			$('.sp_header_nav').removeClass('active');
      $('body').css({'overflow':'auto','height':'auto'});
    }
    $('.sp_header_nav').slideToggle(500);
  });

$('.accordion p').click(function(){

$(this).next('ul').slideToggle();
$(this).toggleClass("active");

});

});



/*-----------------------------------------------------------------------------------*/
/*	ACCORDION（アコーディオンパネル）
/*-----------------------------------------------------------------------------------*/
$(function(){
$('#js_accordion > dd').hide();
$('#js_accordion > dt').click(function(){
	$(this).toggleClass("active");
	$(this).next("dd").slideToggle();
	});
});



/*-----------------------------------------------------------------------------------*/
/*	Scrolltop
/*-----------------------------------------------------------------------------------*/
$(document).ready(function($) {

	var pagetop = $('#js_pagetop');
	pagetop.click(function () {
		$('body, html').animate({ scrollTop: 0 }, 500);
		return false;
	});

});



/*-----------------------------------------------------------------------------------*/
/*	Google Map
/*-----------------------------------------------------------------------------------*/
function initMap() {
  var latlng = new google.maps.LatLng( 34.808502, 135.639683 );
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: latlng
  });

  //マーカーの設定
  var marker = new google.maps.Marker({
    position: latlng,
    map: map,
    icon: 'img/marker.png'//ここを追加
  });
}
// モノクロに変更

/*-----------------------------------------------------------------------------------*/
/*	select value取得して表示する
/*-----------------------------------------------------------------------------------*/
$('#form_select').change(function() {
    var val = $('#form_select').val();
    console.log(val);

    var txt = $('#form_select option:selected').text();
    console.log(txt);
});
