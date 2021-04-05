// --------------------------------------------------------------------------------
//                          オリジナルで書いたコードを記述
// --------------------------------------------------------------------------------
// --------------------
//       ドロワー
// --------------------
// $('.js_drawer_btn').on('click', function () {
//   $(this).toggleClass('is_active');
//   $('.').slideToggle(500);
//   $('.').fadeToggle(500);
//   $('body').toggleClass('is_active');
// });


// iOSのブラウザバック時に強制リロード
// 参考→https://stray-light.info/wp/ios-safari-backbutton/
window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload();
  }
};
