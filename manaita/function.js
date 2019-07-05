

$(function() {
$('#vegas').vegas({/*--backgroundのスライドショー--*/
    slides: [
        { src: 'http://sato127.wp.xdomain.jp/wp-content/themes/manaita/image/image_manaita1.jpg' },
        { src: 'http://sato127.wp.xdomain.jp/wp-content/themes/manaita/image/image_manaita2.jpg' },
        { src: 'http://sato127.wp.xdomain.jp/wp-content/themes/manaita/image/image_manaita3.jpg' },
        { src: 'http://sato127.wp.xdomain.jp/wp-content/themes/manaita/image/image_manaita4.png' },
        { src: 'http://sato127.wp.xdomain.jp/wp-content/themes/manaita/image/image_manaita5.png' }
    ],
    transition: 'fade', //スライドを遷移させる際のアニメーション
    delay: 10000, //スライド切り替え時の遅延時間
    animationDuration: 20000, //スライド表示中のアニメーションの時間
    overlay: 'http://sato127.wp.xdomain.jp/wp-content/themes/manaita/vegas/overlays/02.png',
  });
});

/*フェードイン*/
$(function(){
$(window).scroll(function (){
  $('.fadein').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 200){
          $(this).addClass('scrollin');
      }
  });
});
});

/*ハンバーガーメニュー*/
$(function(){
$('#hamburger').click(function(){
  $("header").toggleClass('open');
  $("nav").slideToggle(500);
});
});

$(function() {
$('.Toggle').click(function() {
  $(this).toggleClass('active');
  if ($(this).hasClass('active')) {
    $('.NavMenu').addClass('active');　 //クラスを付与
  } else {
    $('.NavMenu').removeClass('active'); //クラスを外す
  }
});
});

/*--ページトップへ--*/
$(function(){
var pageTop1 = $("#page-top1");
pageTop1.click(function () {
  $('body, html').animate({ scrollTop: 0 }, 500);
  return false;
});
$(window).scroll(function () {
  if($(this).scrollTop() >= 500) {
    pageTop1.css( "bottom", "10px" );
  } else {
    pageTop1.css( "bottom", "-85px" );
  }
});
});

/*--navがスクロールされたタイミングで固定、footer前で非表示に--*/
$(function() {
var $win = $(window),
$main = $('main'),
$nav = $("#vegas nav"),
navHeight = $nav.outerHeight(),
footerHeight = $('footer').outerHeight(),
docmentHeight = $(document).height(),
navPos = $nav.offset().top,
fixedClass = 'is-fixed',
hideClass = 'is-hide';

$win.on('load scroll', function() {
var value = $(this).scrollTop(),
  scrollPos = $win.height() + value;

if ( value > navPos ) {
if ( docmentHeight - scrollPos <= footerHeight ) {
  $nav.addClass(hideClass);
} else {
  $nav.removeClass(hideClass);
}
$nav.addClass(fixedClass);
$main.css('margin-top', navHeight);
} else {
$nav.removeClass(fixedClass);
$main.css('margin-top', '0');
}
});
});
