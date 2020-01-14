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


  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="<?php echo get_theme_file_uri('js/app.js')?>"></script>
  <script src="https://kit.fontawesome.com/1f22ee88f6.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script>
    (function(d) {
      var config = {
        kitId: 'kvi5vqm',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="ICON" href="<?php echo get_theme_file_uri('favicon.ico')?>">
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
          <nav class="page-nav-pc">
            <ul class="page-nav">
              <li class="page-nav__list"><a href="<?php echo home_url();?>">ホーム</a></li>
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
          <a class="page-nav-btn" id="page-nav-btn">
            <span></span>
            <span></span>
            <span></span>
          </a>

          <nav class="page-nav-box">
            <ul class="page-nav">
              <li class="page-nav__list"><a href="<?php echo home_url();?>">ホーム</a></li>
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
