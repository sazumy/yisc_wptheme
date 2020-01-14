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

<main class="index-page for-yhouth-page for-parents-page about-us-page post-page blog-page schedule-page reservation-page archive-page">
    
    <?php if(is_page('foryouth')){ 
      get_template_part('get_template_parttop-foryouth');
    } else if (is_page('forparents')){
     get_template_part('template-parts/top-forparents');
    } else if (is_page('schedule')){
      get_template_part('template-parts/top-schedule');
    } else if (is_page('aboutus')){
      get_template_part('template-parts/top-aboutus');
    } else if (is_page('reservation')){
      get_template_part('template-parts/top-reservation');
    } else if (is_page('steps')){
      get_template_part('template-parts/top-steps');
    } else {
      // 汎用ページのキービジュアルです。
      get_template_part('template-parts/top-other');
    }
    ?>
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
