<?php
/*
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */

/* テーマのセットアップ */
function my_theme_setup() {
  // <head>内にRSSフィードリンクを出力
  add_theme_support( 'automatic-feed-links' );
  // タイトルタグを自動生成
  add_theme_support( 'title-tag' );
  // HTML5のタグで出力
  add_theme_support( 'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    )
  );
  // アイキャッチ画像を有効化
  add_theme_support( 'post-thumbnails' );
  // ブロックエディター用のCSSを有効化
  add_theme_support( 'wp-block-styles' );
  // 埋め込みコンテンツをレスポンシブ対応に
  add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


/* コンテンツの横幅をセット */
if (!isset($content_width)) {
  $content_width = 840;
}


/* CSSとJavaScriptの読み込み */
function my_script_init() {
	// Font Awesome CDN
  wp_enqueue_style(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.14.0/css/all.css',
    array(),
    '5.14.0',
    'all'
  );
  // Adobe Fonts CDN
  wp_enqueue_style(
    'adobefont',
    'https://use.typekit.net/bff7isf.css'
  );
	// CSSの読み込み
  wp_enqueue_style(
    'style-css',
    get_template_directory_uri() . '/css/style.css',
    array(),
    '1.3.1',
    'all'
  );
	// JavaScriptの読み込み
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/js/main.js',
    // main.jsよりも前にWordPress内部のjQueryを読み込む
    array( 'jquery' ),
    '1.0.6',
    // wp_footer()の位置で出力
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
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page -> post_name;
  }
  return $classes;
};
add_filter( 'body_class', 'add_page_slug_class_name' );


/* 記事一覧ページの前後記事ページネーション */
function archive_pagenation() {
  global $wp_query;
  if ($wp_query -> max_num_pages <= 1)
    return;
    echo '<nav class="pagenation">';
    echo paginate_links(array(
      'total' => $wp_query -> max_num_pages,
      'prev_text' => ('<'),
      'next_text' => ('>'),
      'type' => 'list'
      )
    );
    echo '</nav>';
};


/* 管理画面に閲覧数を表示 */
function add_views_columns($columns) {
  $columns['post_views_count'] = '閲覧数';
  $columns['thumbnail'] = 'サムネイル';
  return $columns;
}
add_filter( 'manage_posts_columns', 'add_views_columns');

function add_views_column($column_name, $post_id) {
  // 閲覧数の呼び出し
  if($column_name == 'post_views_count') {
    $title = get_post_meta($post_id, 'post_views_count', true);
  }
  // サムネイルの呼び出し
  if( $column_name == 'thumbnail') {
    $thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
  }
  // ない場合はなしと表示
  if(isset($title)) {
    echo esc_attr($title);
  }else if( isset($thumb) && $thumb ) {
    echo $thumb;
  }
  else{
    echo __('None');
  }
}
add_action('manage_posts_custom_column', 'add_views_column', 10, 2);

// 並べ替え
function column_orderby_custom($vars) {
  if('post_views_count' == $vars['orderby']){
    $vars = array_merge($vars, array(
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num'
    ));
  }
  return $vars;
}
add_filter( 'request', 'column_orderby_custom' );

// 並べ替えができるように登録
function posts_register_sortable($sortable_column) {
  $sortable_column['post_views_count'] = 'post_views_count';
  return $sortable_column;
}
add_filter( 'manage_edit-post_sortable_columns', 'posts_register_sortable' );
