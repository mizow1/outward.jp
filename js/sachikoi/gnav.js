$(function() {
  $('#js_nav_icon').click(function() {
    // $('.sachikoi_header').toggleClass("active");
console.log('7gnav',$(this).attr('class'));
    if($(this).hasClass('active')) {
      $('.sp_nav').addClass('active');
    } else {
      $('.sp_nav').removeClass('active');
    }
    $('.sp_nav').fadeToggle(250);
  });

  
$(function() {
  $("#panel-btn").click(function() {
    $("#panel").slideToggle(200);
    $("#panel-btn-icon").toggleClass("close");
    return false;
  });
});
  
  
  
// $(function(){
//   $('.btn-trigger').on('click', function() {
//     $(this).toggleClass('active');
//     return false;
//   });
// });

//  $('.accordion p').click(function(){
//  $(this).next('ul').slideToggle(300);
//  $(this).toggleClass("active");
//  });
});

/*-----------------------------------------------------------------------------------*/
/*  SEARCH_BOX
/*-----------------------------------------------------------------------------------*/
//「検索」ボタンを押したら、検索フォームを表示する
$(function(){
  $("#js-search_open").click(function(){
    $("#js-search_panel").slideToggle();
  });
});

//「キャンセル」を押したら、検索フォームを非表示にする
$(function(){
  $("#js-search_panel_close").click(function(){
    $("#js-search_panel").slideToggle();
  });
});
