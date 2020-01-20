<div class="page-top__content col-10 d-md-flex">
  <figure class="keyvis text-center col-md-4">
    <?php $url = get_template_directory_uri();
          $slug = esc_attr($post->post_name); ?>
    <img src="<?php echo $url; ?>/img/eyecatch_<?php echo $slug; ?>.png" alt="対象者のイメージ" class="keyvis__img">
  </figure>

  <div class="page-info two-column mt-3 col-md-6">
    <h2 class="page-info__title w-100">
      <?php echo the_title(); ?>
    </h2>
    <h3 class="page-info__description mt-2 w-100">
      <?php if(is_page('foryouth')){ 
          echo '支援内容';
        } else if (is_page('forparents')){
          echo '保護者支援のご案内';
        } else if (is_page('schedule')){
          echo '講座開催情報';
        } else if (is_page('aboutus')){
          echo 'かわぐち若者サポートステーション<br>育て上げネットについて';
        }; ?>
    </h3>
  </div>
</div>
