$(document).ready(function(){
  // メニューボタン -----------------------------------
  // ドロップダウンメニュー-----------------------------
    var $pageNavBtn = $('#page-nav-btn'),
        $pageNavBox = $('.menu-groval-navigation-container'),
        $active = $('.active');

    $pageNavBtn.on('click',function(){
      $pageNavBtn.toggleClass('active');
      $pageNavBox.toggleClass('active');
    });
  
  // ページトップに向かうボタン---------------------------
  
    var $window = $(window),
        $backToTop = $('.back-to-top'),
        $backToTopBtn = $('#back-to-top-btn'),
        duration = 100,
        easing = 'linear',
        scrollHeight = 250;
  
    // scrollHeightで定めた長さ以上画面がスクロールしたらボタンが見える
    $window.scroll(function(){
      if ($(this).scrollTop() > scrollHeight) {
       $backToTop.css("display", "block");
      } else {
        $backToTop.css("display", "none");
      }
    });
  
    $backToTopBtn.click(function(){
      $('html').animate({scrollTop:0}, duration, easing);
    });
  
    $window.trigger('scroll');
  
  //sticky footer---------------------------------------------
    var $window = $(window),
        $windowWidth = $window.width(),
        $footer = $('.footer'),
        pcWidth = 1080,
        scrollHeight = 250;
  
  
    $window.scroll(function(){
      if ($(this).scrollTop() > scrollHeight && $windowWidth <= pcWidth) {
        $footer.addClass('sticky');
        
      } else {
        $footer.removeClass('sticky');
      }
    });
  
    $window.trigger('scroll');
  });
