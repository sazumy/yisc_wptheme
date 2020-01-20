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


<!-- 固定ページのスラッグを$slugに代入 -->
<?php $slug = esc_attr($post->post_name); ?>

<section class="page-top <?php echo $slug; ?> container-fluid  py-4 d-flex justify-content-center">
  <?php if(is_page(array('foryouth', 'forparents', 'steps'))){ 
    // トップが２カラムのキービジュアルです。
    get_template_part('template-parts/top-basic');
  }  elseif(is_page(array('aboutus', 'schedule', 'reservation', 'about-yisc'))) {
    // トップが１カラムのキービジュアルです。
    get_template_part('template-parts/top-single');
  } else {
    // 汎用ページのキービジュアルです。
    get_template_part('template-parts/top-other');
  }
  ?>
</section>

<main class="container">
  <div class="row d-flex justify-content-center">
    <!-- start wordpress loop -->
    <?php
      if (have_posts()){
        while ( have_posts()){
          the_post();
      ?>

    <article class="page-article col-10" id="">
      <?php the_content();?>
    </article>

    <?php
      }
    }
    ?>
    <!-- end wordpress loop -->

  </div>
</main>

<?php
get_sidebar();
?>

<?php
get_footer();
?>
