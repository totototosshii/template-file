<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  <meta name="twitter:card" content="summary_large_image">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header-inner">
      <?php
        wp_nav_menu(
          array(
            'container'       => 'nav',// メニューを囲むコンテナタグ(div,nav,false)
            'container_class' => 'header-nav',// メニューを囲むコンテナクラス名
            'menu_class'      => 'header-list',// メニューを構成するul要素に適用されるクラス名
            'depth'           => 1,
            'theme_location'  => 'global',
          )
        );
      ?>
      <button type="button" class="drawer-btn">
        <span class="bar"></span><!-- /.bar -->
        <span class="drawer-menuText drawer-text">Menu</span><!-- /.drawer-menuText -->
        <span class="drawer-close drawer-text">Close</span><!-- /.drawer-close-->
        <span class="drawer-visuallyHidden">メニューを開閉する</span><!-- /.drawer-visuallyHidden -->
      </button><!-- /.drawer-btn -->
      <span class="header-musk"></span>
    </div><!-- /.header-inner -->
  </header>
