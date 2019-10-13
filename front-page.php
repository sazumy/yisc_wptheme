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

<main class="index-page">

<?php echo do_shortcode('[metaslider id="75"]'); ?>


  <div class="content">
    <section class="pick-up-index">
      <div class="content__inner">
      <a href="<?php get_template_directory_uri(); ?>/yisc/home">
        <h3 class="pick-up-header">
          PICK UP!
        </h3>
      </a>

        <ul class="pick-up">
          <?php
            $args = array(
              'posts_per_page' => 4 // 表示件数
              );
              $posts = get_posts( $args );
              foreach ( $posts as $post ): // ループの開始
                setup_postdata( $post ); // 記事データの取得
              ?>
              <li class="pick-up__list">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
            <?php
            endforeach; // ループの終了
            ?>
          </ul>

      </div>
    </section>

    <div class="two-column">
      <section class="for-youth index-tile">
        <a href="<?php echo home_url();?>/foryouth">
          <div class="index-tile__inner">
            <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_01.png" alt="対象者のイメージ" class="eyecatch">

            <div class="section">
              <h3 class="section__title">
                悩んでいるあなたへ
              </h3>
              <h4 class="section__description">
                支援内容
              </h4>
            </div>
          </div><!--end.index-tile__inner-->
        </a>
      </section>
      

      <section class="for-parents index-tile">
        <a href="<?php echo home_url();?>/forparents">
          <div class="index-tile__inner">
            <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_02.png" alt="対象者のイメージ" class="eyecatch">
          
            <div class="section">
              <h3 class="section__title">
                保護者の皆様へ
              </h3>
              <h4 class="section__description">
                保護者支援のご案内
              </h4>
            </div>
          </div><!--end.index-tile__inner-->
        </a>
      </section>
      
    </div><!-- end.two-column-->

        
    <section class="schedule index-tile">
      <a href="<?php echo home_url();?>/schedule">
        <div class="index-tile__inner no-eyecatch">
          <div class="section">
            <h3 class="section__title">
              スケジュール
            </h3>
            <h4 class="section__description">
              講座開催情報
            </h4>
          </div>
        </div>
      </a>
    </section>
    <!-- end top-schedule.php -->

    <div class="two-column">
      <!-- 外部サイトへのリンク -->
      <section class="voice index-tile">
        <a href="https://www.sodateage.net/yss/kawaguchi/voice/" target="_new">
          <div class="index-tile__inner">
            <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_03.png" alt="対象者のイメージ" class="eyecatch">
      
            <div class="section">
              <h3 class="section__title">
                利用者の声
              </h3>
            </div>
          </div><!--end.index-tile__inner-->
        </a>
      </section>

      <section class="blog index-tile">
        <a href="https://www.sodateage.net/yss/kawaguchi/blog/" target="_new">
          <div class="index-tile__inner no-eyecatch">
            <div class="section">
              <h3 class="section__title">
                スタッフブログ
              </h3>
            </div>
          </div>
        </a>
      </section>

    </div>

    <div class="two-column">
      <!-- start top-reservation.php -->
      <section class="reservation index-tile">
        <a href="<?php echo home_url();?>/reservation">
          <div class="index-tile__inner no-eyecatch">
            <div class="section">
              <h3 class="section__title">
                ご利用・ご予約方法
              </h3>
            </div>
          </div>
        </a>
      </section>

      <section class="step index-tile">
        <a href="<?php echo home_url();?>/steps">
          <div class="index-tile__inner">
            <img src="<?php echo get_template_directory_uri();?>/img/eyecatch_04.png" alt="対象者のイメージ" class="eyecatch">
          
            <div class="section">
              <h3 class="section__title">
                就職までのステップ
              </h3>
              <h4 class="section__description">
                ご利用開始から就職までの流れ
              </h4>
            </div>
          </div><!--end.index-tile__inner-->
        </a>
      </section>
    <!-- end top-steps.php -->
    </div>

    <div class="last-content">
      <!-- start top-aboutus.php -->
      <section class="about-us index-tile">
        <a href="<?php echo home_url();?>/aboutus">
          <div class="index-tile__inner no-eyecatch">
            <div class="section">
              <h3 class="section__title">
                運営組織・アクセス
              </h3>
              <h4 class="section__description">
                かわぐち若者サポートステーション<br>
                育て上げネットについて
              </h4>
            </div>
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
