<?php
/*
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */

/* テーマのセットアップ */
function my_setup() {
  add_theme_support( 'post-thumbnails' );			 /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); 					 /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( 					 /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
  add_theme_support( 'wp-block-styles' );
  if ( ! isset ($content_width ) ) {					 /* コンテンツの横幅をセット */
    $content_width = 840;
	}
  add_theme_support( 'responsive-embeds' );		 /* 埋め込みコンテンツレスポンシブ */
}
add_action( 'after_setup_theme', 'my_setup' );


/* CSSとJavaScriptの読み込み */
function my_script_init() {
	// fontawesome CDN.
  wp_enqueue_style( 'fontawesome',
                    'https://use.fontawesome.com/releases/v5.14.0/css/all.css', array(),
                    '5.14.0',
                    'all'
                  );
  // adobefont CDN
  wp_enqueue_style( 'adobefont',
                    'https://use.typekit.net/bff7isf.css'
                  );
	// CSS の読み込み.
  wp_enqueue_style( 'style-css',
                    get_template_directory_uri() . '/css/style.css', array(),
                    '1.0.6',
                    'all'
                  );
	// JS の読み込み  jquery を先に読み込む  </body> 終了タグの前に配置.
  wp_enqueue_script( 'script-js',
                      get_template_directory_uri() . '/js/main.js',
                      array( 'jquery' ),
                      '1.0.0',
                      true
                    );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );


/* メニューの設定 */
function my_menu_init() {
	register_nav_menus(
		array(
			'global' => 'ヘッダーメニュー',
		)
	);
}
add_action( 'init', 'my_menu_init' );


/* 固定ページ毎に設定したスラッグをclassとして<body>に追加 */
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
  }
  return $classes;
}
