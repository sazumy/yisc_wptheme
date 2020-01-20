<?php
  //=========================================================
  // 1. theme set up
  //=========================================================

  // アイキャッチ画像を使えるようにする
  function yisc_setup() {
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'yisc_setup');

 // ..続きを読む を表示
  function yisc_new_excerpt_more($more) {
    return '…<a class="read-more" href="'. get_permalink()  .'">>>続きを読む</a>';
  }
  add_filter('excerpt_more', 'yisc_new_excerpt_more');

  // ..続きを読む を表示する文字数を帰る
  function yisc_excerpt_length() {
    return 200; //ここの数字をいじると、文字数が調整できます
  }
  add_filter('excerpt_mblength', 'yisc_excerpt_length');

  // メニューの機能を有効化する
  function yisc_setup_menu() {
    register_nav_menu( 'header-navigation', 'Groval Navigation' );
  }
  
  add_action( 'after_setup_theme', 'yisc_setup_menu' );


?>
