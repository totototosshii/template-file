// --------------------------------
//      ハンバーガーメニュー
// --------------------------------
jQuery('.drawer-btn').on('click', function () {
  jQuery(this).toggleClass('is-active');
  jQuery('.header-nav').toggleClass('is-active');
  jQuery('.drawer_menu_text').toggleClass('is-active');
  jQuery('.js-drawer_close').toggleClass('is-active');
  jQuery('.header-musk').fadeToggle(300);
  jQuery('body').toggleClass('noscroll');
});


// --------------------------------
//          フェードイン
// --------------------------------
jQuery(window).on("scroll", function () {
  jQuery('[data-fadeIn]').each(function (index, el) {
    if (jQuery(window).scrollTop() > (jQuery(el).offset().top - jQuery(window).height() / 2)) {
  jQuery(el).addClass('is-over');
    }
  });
});


// --------------------------------
//      スクロールトップボタン
// --------------------------------
//スクロール量を取得する関数
function getScrolled() {
  return (window.pageYOffset !== undefined) ? window.pageYOffset : document.documentElement.scrollTop;
}

//トップに戻るボタンの要素を取得
let topButton = document.getElementById('scrollTop');

//ボタンの表示・非表示
window.onscroll = function () {
  (getScrolled() > 500) ? topButton.classList.add('is-fadein') : topButton.classList.remove('is-fadein');
};

//トップに移動する関数
function scrollToTop() {
  let scrolled = getScrolled();
  window.scrollTo(0, Math.floor(scrolled / 2));
  if (scrolled > 0) {
    window.setTimeout(scrollToTop, 60);
  }
};

// スクロールトップ
topButton.onclick = function () {
  scrollToTop();
};
