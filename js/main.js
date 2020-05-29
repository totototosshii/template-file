//ハンバーガーメニューの開閉
$('.burger-btn').on('click', function () {
  $('.drawer').toggleClass('slide-in');
  $('.burger-btn').toggleClass('cross');
  $('body').toggleClass('noscroll');
});

// ページ内リンクスクロール
$(function () {
  $('a[href^="#"]').click(function () {
    var odjust = -140;
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + odjust;
    $("html,body").animate({ scrollTop: position }, speed, "swing");
  });
});

// ページトップボタン表示
$(window).scroll(function () {
  var now = $(window).scrollTop();
  if (now > 200) {
    $('.pagetop').fadeIn("fast");
  } else {
    $('.pagetop').fadeOut('fast');
  }
});
