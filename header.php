<?php /**
 * 全てのページに共通の<head></head>タグの中身
 * および<header></header>タグの中身
 * 
 * @link #
 *
 * @package WordPress
 * @subpackage yisc
 * @since 1.0.0
 */ ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="埼玉県川口市にある若者就労支援施設、若者自立支援センター埼玉のホームページです" />

  <meta property="og:url" content="https://yisc-saitama.com/" />
  <meta property="og:title" content="若者自立支援センター埼玉" />
  <meta property="og:type" content="website">
  <meta property="og:description" content="若者自立支援センター埼玉では、若年無業やひきこもり状態などの「働きたいのに働けない」若者に対して、もう一度はじめの一歩を踏み出すお手伝いをしています。お子様の自立に悩む保護者の方はぜひ一度、当ウェブサイトをご覧下さい。" />
  <meta property="og:image" content="https://yisc-saitama.com/wp-content/uploads/YISC_logo.jpg" />
  <meta name="twitter:card" content="Summary Card" />

<!-- JS ----------------------------------------------------------------- -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="<?php echo get_theme_file_uri('/js/app.js')?>"></script>
  <script src="https://kit.fontawesome.com/1f22ee88f6.js" SameSite=None ></script>
  

<!-- Style Sheet ----------------------------------------------------------------- -->

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="ICON" href="<?php echo get_theme_file_uri('favicon.ico')?>">
  <title>若者自立支援センター埼玉</title>
  <?php wp_head(); ?>
</head>
<!--end head----------------------------------------------------------------->
<body <?php body_class(); ?> id="<?php echo esc_attr( $post->post_name ); ?>">
  <header class="header container">
    <div class="row no-gutters py-5 d-flex justify-content-between">
      <a href="<?php echo home_url();?>" class="page__title col-10 col-lg-5">
        <h1 class="page__title--yisc">
          <?php bloginfo('name'); ?>  <!-- サイトタイトルをここに表示 -->
        </h1>
        <p class="page__title--saposute">
          <?php bloginfo('description'); ?> <!-- サイトの説明（ここではサポステ名）を表示 -->
        </p>
      </a>

      
      <!-- ハンバーガーメニューのボタン（タブレット以下で表示） -->
      <a class="page-nav-btn d-lg-none cod-2" id="page-nav-btn">
        <span></span>
        <span></span>
        <span></span>
      </a>
      <!-- グローバルナビゲーション -------------------------------------------->
      <?php 
        wp_nav_menu( array( 
          'theme_location' => 'header-navigation' 
        ) ); 
      ?>
    </div>
  </header>
    <!--end header----------------------------------------------------------------->
