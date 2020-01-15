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

<main class="">
  <!-- 固定ページのスラッグを$slugに代入 -->
  <?php $slug = esc_attr($post->post_name); ?>

  <section class="page-top <?php echo $slug; ?> container-fluid  py-4 d-flex justify-content-center">
    <?php if(is_page($slug)){ 
      get_template_part('template-parts/top-'.$slug);
    }  else {
      // 汎用ページのキービジュアルです。
      get_template_part('template-parts/top-other');
    }
    ?>
  </section>

    <div class="content">
<!-- start wordpress loop -->
  <?php
    if (have_posts()){
      while ( have_posts()){
        the_post();
    ?>
    <main>
      <article id="">      
        <?php the_content();?>
      </article>
    </main>
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
