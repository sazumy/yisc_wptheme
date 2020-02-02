<?php get_header(); ?>




<section class="page-top <?php echo $slug; ?> container-fluid  py-4 d-flex justify-content-center">
  <div class="page-top__content col-10 d-flex justify-content-center">
    <div class="page-info">
      <h3 class="page-info__title">
        おすすめ情報
      </h3>
    </div>
  </div>
</section>

<main class="container">
  <div class="row d-flex justify-content-center">
      <div class="col-sm-10">
      <?php
        if ( have_posts() ) :
        ?>
            
        <?php
          while ( have_posts() ) :
          the_post();
        ?>


        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <section class="post__content my-4">
            <figure class="post__content__keyvis">
              <?php
                if(has_post_thumbnail()){ 
                  the_post_thumbnail();
                } else {
              ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no image">
              <?php
                }
              ?>
            </figure>

            <div class="post__content__right">
              <h3 class="post__header">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
              <ul class="post__info">
                <li class="post__info__date">
                  <?php the_time( get_option( 'date_format' ) ); ?>
                </li>
                <li class="post__info__auther">
                  <?php the_author(); ?>
                </li>
              </ul>
              
              <div class="category-and-tag">
                <div class="post__categories">
                  <?php
                    the_category(' ');
                  ?>
                </div>

                <div class="post__tags">
                  <?php the_tags('', ' ');
                  ?>
                </div>
              </div>

              <section class="post__text">
                <?php the_excerpt(); ?>
              </section>

            </div><!--end.post__content__right-->
          </section>
            
        </article>


        <?php
        endwhile;
        ?>
        <?php
          endif;
          ?>
    
    </div>
  </div>
</main>

<!--end main-------------------------------------------------------------------->
<?php get_sidebar(); ?>

<!--end aside-------------------------------------------------------------------->
<?php get_footer(); ?>
