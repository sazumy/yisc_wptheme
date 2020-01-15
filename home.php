<?php get_header(); ?>



<main class="blog-top-page">
  <section class="schedule">
    <div class="content__inner">
      <div class="section">
        <h3 class="section__title">
          おすすめ情報
        </h3>
        <h4 class="section__description">
          PICK UP
        </h4>
      </div>
    </div>
  </section>

  <div class="content">
    <?php
      if ( have_posts() ) :
      ?>
          
      <?php
        while ( have_posts() ) :
        the_post();
      ?>


      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="content__inner">
          <h3 class="post__header">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>

          <section class="post__content">
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
              <ul class="post__info">
                <li class="post__info__date">
                  <?php the_time( get_option( 'date_format' ) ); ?>
                </li>
                <li class="post__info__auther">
                  <?php the_author(); ?>
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
                  <?php the_excerpt(); ?>
                </p>
              </section>

            </div><!--end.post__content__right-->
          </section>
          
        </div><!--end.content__inner-->
      </article>


      <?php
      endwhile;
      ?>
      <?php
        endif;
        ?>
  </div>
</main>

<!--end main-------------------------------------------------------------------->
<?php get_sidebar(); ?>

<!--end aside-------------------------------------------------------------------->
<?php get_footer(); ?>
