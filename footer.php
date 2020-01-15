<?php /**
 * 全てのページに共通の<footer></footer>タグの中身
 *
 * 
 * @link #
 *
 * @package WordPress
 * @subpackage yisc
 * @since 1.0.0
 */ ?>

 
    <footer class="footer container-fluid">
      <nav class="footer__nav row d-flex pt-4 justify-content-center">
        <ul class="contact d-flex col-4 justify-content-center">
          <li class="contact__list"><a href="tel:0482558680"><i class="fas fa-phone"></i></a></li>
          <li class="contact__list">
            <a href="https://www.sodateage.net/yss/kawaguchi/contact/" target="_new">
              <i class="far fa-envelope"></i>
            </a>
          </li>
        </ul>
      </nav>

      <div class="footer__info row d-flex justify-content-center">
        <small class="copy mr-2">
          &copy; YISC <?php echo date('Y'); ?> All Rights Reserved.
        </small>

        <p class="privacy">
          <a href="<?php echo home_url();?>/privacy" class="privacy__link">
            <?php echo get_the_title(187); ?>
          </a>
        </p>
      </div>
     
    </footer>
  </div><!--end.wrapper-->
  <?php wp_footer(); ?>

  <!-- Boot Strap--------------------------------------------------- -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
