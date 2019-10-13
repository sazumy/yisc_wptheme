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

<main class="archive">
  <?php 
    if(have_posts()){
  ?>

  <section class="archive">
    <div class="content__inner">
      <figure class="content__inner--l">
        <img src="<?php echo get_template_directory_uri();?>/img/archve_keyviz.png" alt="対象者のイメージ" class="eyecatch__img">
      </figure>

      <div class="content__inner--r">
        <div class="section">
          <h2 class="section__title">
            <?php 
              if (is_category()){
                echo '「'. single_cat_title('', false).'」';
              } elseif (is_tag()){
                echo '「'. single_tag_title('', false).'」';
              }
              ?>の記事一覧
          </h3>
        </div>
      </div>
    </div>
  </section>


  <div class="content">
    <article class="post">
      <?php
        while(have_posts()){
        the_post();
      ?>

          <div class="content__inner">
            <h3 class="post__header">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>

            <section class="post__content">
              <figure class="post__content__eyecatch">
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
                    <?php
                      the_time( get_option('date_format'));
                    ?>
                  </li>
                  <li class="post__info__auther">
                    <?php 
                      the_author();
                    ?>
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

      <?php
          }
        }
      ?><!-- end wordpress loop -->
    </article>
  </div><!--end.content-->
</main>


<?php
get_sidebar();
?>

<?php
get_footer();
?>
