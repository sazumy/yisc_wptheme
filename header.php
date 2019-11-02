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
  <meta name="robots" content="noindex,nofollow" />

  <meta property="og:url" content="https://yisc-saitama.com/" />
  <meta property="og:title" content="若者自立支援センター埼玉" />
  <meta property="og:type" content="ページのタイプ">
  <meta property="og:description" content="若者自立支援センター埼玉では、若年無業やひきこもり状態などの「働きたいのに働けない」若者に対して、もう一度はじめの一歩を踏み出すお手伝いをしています。お子様の自立に悩む保護者の方はぜひ一度、当ウェブサイトをご覧下さい。" />
  <meta property="og:image" content="画像のURL" />
  <meta name="twitter:card" content="カード種類" />
  <meta name="twitter:site" content="@Twitterユーザー名" />


  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="<?php echo get_theme_file_uri('js/app.js')?>"></script>
  <script src="https://kit.fontawesome.com/1f22ee88f6.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <title>若者自立支援センター埼玉</title>
  <?php wp_head(); ?>
</head>
<!--end head----------------------------------------------------------------->

<body>
  <div class="wrapper" ontouchstart="">
    <header class="header">
      <div class="content__inner">
        <h1 class="page__title">
          <a href="<?php echo home_url();?>">若者自立支援センター埼玉
          <p class="saposute-name">かわぐち若者サポートステーション</p>
          </a>
        </h1>
        <div class="content__inner--r visible-pc">
          <i class="fas fa-bars page-nav-btn" id="page-nav-btn"></i>

          <nav class="page-nav-box">
            <ul class="page-nav">
              <li class="page-nav__list"><a href="<?php echo home_url();?>/foryouth">悩んでいるあなたへ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/forparents">保護者の皆様へ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/schedule">スケジュール</a></li>
              <li class="page-nav__list"><a href="https://www.sodateage.net/yss/kawaguchi/voice/" target="_new">利用者の声</a></li>
              <li class="page-nav__list"><a href="https://www.sodateage.net/yss/kawaguchi/blog/" target="_new">スタッフブログ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/reservation">ご利用・ご予約方法</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/steps">就職までのステップ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/aboutus">運営組織・アクセス</a></li>
            </ul>
          </nav>
        </div>

        <!-- タブレットサイズ以下で見えるメニュー -->
        <div class="content__inner--r visible-tablet">
          <i class="fas fa-bars page-nav-btn" id="page-nav-btn"></i>

          <nav class="page-nav-box">
            <ul class="page-nav">
              <li class="page-nav__list"><a href="<?php echo home_url();?>/foryouth">悩んでいるあなたへ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/forparents">保護者の皆様へ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/schedule">スケジュール</a></li>
              <li class="page-nav__list"><a href="https://www.sodateage.net/yss/kawaguchi/voice/" target="_new">利用者の声</a></li>
              <li class="page-nav__list"><a href="https://www.sodateage.net/yss/kawaguchi/blog/" target="_new">スタッフブログ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/reservation">ご利用・ご予約方法</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/steps">就職までのステップ</a></li>
              <li class="page-nav__list"><a href="<?php echo home_url();?>/aboutus">運営組織・アクセス</a></li>
            </ul>
          </nav>
        </div>
      </div><!--end header.content__inner-->
    </header>
    <!--end header----------------------------------------------------------------->
