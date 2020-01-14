// webfont

(function(d) {
  var config = {
    kitId: 'kvi5vqm',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

$(document).ready(function(){
  
  // メニューボタン -----------------------------------
  // ドロップダウンメニュー-----------------------------
    var $pageNavBtn = $('#page-nav-btn'),
        $pageNavBox = $('.page-nav-box'),
        $active = $('.active');

    $pageNavBtn.on('click',function(){
    $(this).toggleClass('active');
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
