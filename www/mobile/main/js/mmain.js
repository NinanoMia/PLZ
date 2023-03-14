$(document).ready(function() {
  let slides = $("#mslide .banner_box");
  let currentSlide = 0;
  let slideIndex = 1;

  slides.hide();
  slides.eq(currentSlide).show().addClass("on"); // 첫번째 .banner_box에 .on 클래스 추가
  $(".n_box li").removeClass("on");
  $(".n_box li").eq(currentSlide).addClass("on"); // 첫번째 .banner_box와 같은 인덱스의 li에 .on 클래스 추가

  Timer = setInterval(function() {
    slides.eq(currentSlide).stop().fadeOut();
    currentSlide = (currentSlide + 1) % slides.length;
    slides.eq(currentSlide).stop().fadeIn();
    $(".n_box li").removeClass("on");
    $(".n_box li").eq(currentSlide).addClass("on");
  }, 7000);

  $(".bi-chevron-left").click(function() {
    clearInterval(Timer);}, function(){
    slideIndex--;
    if (slideIndex < 1) {
      slideIndex = $(".banner_box").length;
    }
    moveSlide(slideIndex);
  });

  $(".bi-chevron-right").click(function() {
    clearInterval(Timer);}, function(){
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
    clearInterval(Timer);}, function(){
    let index = $(this).index();
    moveSlide(index);
    console.log(currentSlide);
    console.log(slideIndex);
  });
});

// 스와이퍼 슬라이드

const swiper = new Swiper('.swiper-container', {
  //기본 셋팅
  //방향 셋팅 vertical 수직, horizontal 수평 설정이 없으면 수평
  direction: 'horizontal',
  //한번에 보여지는 페이지 숫자
  slidesPerView:1.4,
  //페이지와 페이지 사이의 간격
  spaceBetween: 40,
  //드레그 기능 true 사용가능 false 사용불가
  debugger: true,
  //마우스 휠기능 true 사용가능 false 사용불가
  mousewheel: true,
  //반복 기능 true 사용가능 false 사용불가
  loop: false,
  //선택된 슬라이드를 중심으로 true 사용가능 false 사용불가 djqt
  centeredSlides: false,

  //페이징
  pagination: {
    //페이지 기능
    el: '.swiper-pagination',
    //클릭 가능여부
    clickable: true,
  },
});



  

