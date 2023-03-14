$(document).ready(function() {
  let slides = $("#mslide .banner_box");
  let currentSlide = 0;
  let slideIndex = 1;

  slides.hide();
  slides.eq(currentSlide).show().addClass("on"); // 첫번째 .banner_box에 .on 클래스 추가
  $(".n_box li").removeClass("on");
  $(".n_box li").eq(currentSlide).addClass("on"); // 첫번째 .banner_box와 같은 인덱스의 li에 .on 클래스 추가

  setInterval(function() {
    slides.eq(currentSlide).stop().fadeOut();
    currentSlide = (currentSlide + 1) % slides.length;
    slides.eq(currentSlide).stop().fadeIn();
    $(".n_box li").removeClass("on");
    $(".n_box li").eq(currentSlide).addClass("on");
  }, 7000);

  $(".bi-chevron-left").click(function() {
    slideIndex--;
    if (slideIndex < 1) {
      slideIndex = $(".banner_box").length;
    }
    moveSlide(slideIndex);
  });

  $(".bi-chevron-right").click(function() {
    slideIndex++;
    if (slideIndex > $(".banner_box").length) {
      slideIndex = 1;
    }
    moveSlide(slideIndex);
  });

  function moveSlide(n) {
    $(".banner_box").stop().fadeOut(700);
    $(".banner_box:nth-of-type("+n+")").stop().fadeIn(700);
    slideIndex = n;
    currentSlide = n - 1;
    $(".n_box li").removeClass("on");
    $(".n_box li").eq(currentSlide).addClass("on");
  } 
  $(".n_box li").click(function() {
    let index = $(this).index();
    moveSlide(index + 1);
  });

  // 마우스 클릭 시 intro section으로 scrollTop효과

  $('.scroll-down').click(function() {
    $('html, body').animate({
      scrollTop: $('#intro').offset().top
    }, 300);
  });

  
  


  // intro 섹션 

  $('.img_box01').hover(function() {
    if ($(this).find('a').length == 0) {
      $(this).append('<a href="#" class="more-info">자세히 보기</a>');
      $(this).find('a').css({
        'box-sizing': 'border-box',
        'position': 'absolute',
        'width': '220px',
        'height': '52px',
        'left': '50%',
        'top': '50%',
        'transform': 'translate(-50%, -50%)',
        'border': '1px solid #FFFFFF',
        'color': '#fff',
        'text-align': 'center',
        'line-height': '52px',
        'text-decoration': 'none',
        'font-weight': 'bold',
        'font-size': '20px',
        'z-index': '10'
      });
    }
  }, function() {
    $(this).find('a').remove();
  });
  $('.img_box02').hover(function() {
    if ($(this).find('a').length == 0) {
      $(this).append('<a href="#" class="more-info">자세히 보기</a>');
      $(this).find('a').css({
        'box-sizing': 'border-box',
        'position': 'absolute',
        'width': '220px',
        'height': '52px',
        'left': '50%',
        'top': '50%',
        'transform': 'translate(-50%, -50%)',
        'border': '1px solid #FFFFFF',
        'color': '#fff',
        'text-align': 'center',
        'line-height': '52px',
        'text-decoration': 'none',
        'font-weight': 'bold',
        'font-size': '20px',
        'z-index': '10'
      });
    }
  }, function() {
    $(this).find('a').remove();
  });
  $('.img_box03').hover(function() {
    if ($(this).find('a').length == 0) {
      $(this).append('<a href="#" class="more-info">자세히 보기</a>');
      $(this).find('a').css({
        'box-sizing': 'border-box',
        'position': 'absolute',
        'width': '220px',
        'height': '52px',
        'left': '50%',
        'top': '50%',
        'transform': 'translate(-50%, -50%)',
        'border': '1px solid #FFFFFF',
        'color': '#fff',
        'text-align': 'center',
        'line-height': '52px',
        'text-decoration': 'none',
        'font-weight': 'bold',
        'font-size': '20px',
        'z-index': '10'
      });
    }
  }, function() {
    $(this).find('a').remove();
  });
});

// 쿠키만들기
$(function() {
  if($.cookie('popup')=='none') {
      // 쿠키 파일이 현재 브라우저에 저장되어 있는지를 확인하여 none이면 모달이 안나오게 한다.
      $('#modal').hide();
  }

  

  //오늘하루열지않음을 클릭시쿠키가 생성이 되고 그렇지 않으면 그냥 모달을 숨기는 내용
function closePop() {
let ch = $('#ch'); // 체크박스 변수
if(ch.is(':checked')) {
  alert('체크박스');
    $.cookie('popup', 'none', {expires:7, path:'/'}); // 쿠키를 생성한다.
}
$('#modal').hide();
}

$('#modal>#banner>p>label').click(function(){
$.cookie('popup', 'none', {expires:7, path:'/'}); // 쿠키를 생성한다.
})

$('#modal a').click(function(){
$('#modal').fadeOut();
})
});
//슬라이드
$(function(){
  //1. 변수선언
    let slide = $('#banner #img');
    let l_btn = $('#banner .bi-chevron-left');
    let r_btn = $('#banner .bi-chevron-right');
    let img_w = 450;
    let n  = $('.mc_btn>li').index();
    // console.log(n);

    function moveLeft(n){
        slide.stop().animate({left:-img_w*n},300);  //0 원래위치로 돌아옴.
        $('.mc_btn li').removeClass('on');
        $('.mc_btn li').eq(n).addClass('on');
        // console.log('moveleft!')
    }

    Timer = setInterval(function(){
      if(n==0){
        n=1;
      }else{
        n=0;
      };
      moveLeft(n);}
      ,5000
    );

    l_btn.click(function(){
      clearInterval(Timer);
    },function(){
      if(n==0){
        n=1;
      }else{
        n=0;
      };
      moveLeft(n);}
      ,5000);

    r_btn.click(function(){
      clearInterval(Timer);
    },function(){
      if(n==0){
        n=1;
      }else{
        n=0;
      };
      moveLeft(n);}
      ,5000);

    $('.c_btn li:first-child').click(function(){
      clearInterval(Timer);
    },function(){
      moveLeft(0);}
      ,5000);

  $('.c_btn li:last-child').click(function(){
      clearInterval(Timer);
    },function(){
      moveLeft(1);}
      ,5000);
  });

  

