<?php
/**
 * The main template file
 *
 * 
 * @link #
 *
 * @package WordPress
 * @subpackage yisc
 * @since 1.0.0
 */

get_header();
?>

<!-- スライダー ---------------------------------------------->
<?php echo do_shortcode('[metaslider id="75"]'); ?>
<!-- スライダー ここまで---------------------------------------->

<!-- コンテンツ ---------------------------------------------->
<!-- PICK UP! -------->
<main class="container">
  <div class="row">
    <section class="pick-up text-center col-12 mt-5">
      <a href="<?php get_template_directory_uri(); ?>/yisc/home">
        <h3 class="pick-up__header anim-bigger">
          PICK UP!
        </h3>
      </a>

    <ul class="pick-up__index">
      <?php
        $args = array(
          'posts_per_page' => 4 // 表示件数
          );
          $posts = get_posts( $args );
          foreach ( $posts as $post ): // ループの開始
            setup_postdata( $post ); // 記事データの取得
          ?>
          <li class="pick-up__list">
            <a href="<?php the_permalink(); ?>" class="pick-up__link">
              <?php the_title(); ?>
            </a>
          </li>
        <?php
          endforeach; // ループの終了
      ?>
    </ul>
  </section>
<!-- PICK UP! ここまで-------->
<!-- 各ページへのリンク-------->
  <div class="col-12 d-md-flex no-gutters">
    <section class="foryouth w-md-50 p-4 mt-5">
      <a href="<?php echo home_url();?>/foryouth">
        <figure class="keyvis">
          <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_foryouth.png" alt="対象者のイメージ" class="keyvis__img anim-rotate">
        </figure>
        <div class="page-info mt-3">
          <h3 class="page-info__title">
            悩んでいるあなたへ
          </h3>
          <h4 class="page-info__description">
            支援内容
          </h4>
        </div>
      </a>
    </section>
    

    <section class="forparents w-md-50 p-4 mt-5"> 
      <a href="<?php echo home_url();?>/forparents">
        <figure class="keyvis">
          <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_forparents.png" alt="対象者のイメージ" class="keyvis__img anim-shake">      
        </figure>
        <div class="page-info mt-3">
          <h3 class="page-info__title">
            保護者の皆様へ
          </h3>
          <h4 class="page-info__description">
            保護者支援のご案内
          </h4>
        </div>

      </a>
    </section>
    
  </div><!-- end.two-column-->

        
    <section class="schedule col-12 p-4 mt-5">
      <a href="<?php echo home_url();?>/schedule">
        <div class="page-info">
          <h3 class="page-info__title">
            スケジュール
          </h3>
          <h4 class="page-info__description">
            講座開催情報
          </h4>
        </div>
      </a>
    </section>
    <!-- end top-schedule.php -->

    <div class="col-12 d-md-flex no-gutters">
      <!-- 外部サイトへのリンク -->
      <section class="voice w-md-50 p-4 mt-4">
        <a href="https://www.sodateage.net/yss/kawaguchi/voice/" target="_new">
          <figure class="keyvis">
            <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_03.png" alt="対象者のイメージ" class="keyvis__img bigger">
          </figure>
          <div class="page-info mt-3">
            <p class="balloon">
              若者自立支援センター埼玉<br>かわぐち若者サポートステーションの
            </p>
            <h3 class="page-info__title">
              利用者の声
            </h3>
          </div>
        </a>
      </section>

      <section class="blog w-md-50 p-4 mt-4">
        <a href="https://www.sodateage.net/yss/kawaguchi/blog/" target="_new">
          <div class="page-info mt-3">
            <p class="balloon">
              若者自立支援センター埼玉<br>かわぐち若者サポートステーションの
            </p>
            <h3 class="page-info__title">
              スタッフブログ
            </h3> 
          </div>
        </a>
      </section>
    </div>

    <div class="col-12 d-md-flex no-gutters">
      <!-- start top-reservation.php -->
      <section class="reservation w-md-50 p-4 mt-4">
        <a href="<?php echo home_url();?>/reservation">
          <div class="page-info mt-3">
            <h3 class="page-info__title">
              ご利用・ご予約方法
            </h3>
          </div>
        </a>
      </section>

      <section class="steps w-md-50 p-4 mt-4">
        <a href="<?php echo home_url();?>/steps">
          <figure class="keyvis">
            <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_steps.png" alt="対象者のイメージ" class="keyvis__img rotate">
          </figure>
          <div class="page-info mt-3">
            <h3 class="page-info__title">
              就職までのステップ
            </h3>
            <h4 class="page-info__description">
              ご利用開始から就職までの流れ
            </h4>
          </div>
        </a>
      </section>
    <!-- end top-steps.php -->
    </div>

      <!-- start top-aboutus.php -->
      <section class="aboutus col-12 p-4 mt-4">
        <a href="<?php echo home_url();?>/aboutus">
          <div class="page-info">
            <h3 class="page-info__title">
              運営組織・アクセス
            </h3>
            <h4 class="page-info__description">
              かわぐち若者サポートステーション<br>
              育て上げネットについて
            </h4>
          </div>
        </a>
      </section>
      <!-- end top-aboutus.php -->
    </div>
  </div><!-- end.content -->
</main>

<?php
get_sidebar();
?>

<?php
get_footer();
?>
