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


  // invest 좌,우 터치 슬라이드 
//   const swiper = new Swiper(".swiper-container", {
//     slidesPerView: 3,
//     spaceBetween: 20,
//     loop: true,
//     autoplay: {
//       delay: 3000,
//     }
//   });
// });
      const swiper = new Swiper(".mySwiper",{
        spaceBetween:30, 
        cetereSlides:TextTrackCueList,
        autoplay:{
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination:{
          el: ".swiper-pagination",
          clickable:true,
        },
        navigation:{
          next
        }
      })




  
    })
