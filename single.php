<?php
/**
 * The blog template file
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

<!-- start wordpress loop -->
<?php
    if (have_posts()){
      while ( have_posts()){
        the_post();
    ?>
    

  <div class="blog">
    <div class="page-info">
      <h3 class="page-info__title">
        <?php the_author(); ?>の投稿
      </h3>
      <h4 class="page-info__description">
        PICK UP!
      </h4>
    </div>
  </div>

  <main class="container">
    <div class="row">
    
      <article id="post-<?php the_id(); ?>" <?php post_class();?> >
        <div class="col-10">
          <h3 class="post__header">
            <?php the_title(); ?>
          </h3>

          <section class="post__content">
            

            <div class="post__content__right">
              <ul class="post__info">
                <li class="post__info__date">
                  <?php echo get_the_date( get_option( 'date_format' ) ); ?>&nbsp;<?php the_time(); ?>
                </li>
                <li class="post__info__auther">
                  <?php the_author();?>
                </li>
              </ul>

              <div class="post__categories">
                <?php
                  the_category(' ');
                ?>
              </div>

              <div class="post__tags">
                <?php the_tags('', ' ');
                ?>
              </div>

              <section>
                <p class="post__text">
                  <?php the_content(); ?>
                </p>
              </section>

            </div><!--end.post__content__right-->
          </section>
          
        </div><!--end.content__inner-->
      </article>

      <section class="cta">
        <a href="reservation.html">
          <button class="cta__button">
            ご利用方法はこちら
          </button>
        </a>
      </section>
    </div><!--end.content-->
  
  </main>

  <?php
    }
  }
  ?>
<!-- end wordpress loop -->


<?php
get_sidebar();
?>

<?php
get_footer();
?>
