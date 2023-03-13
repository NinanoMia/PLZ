const body = document.querySelector('body');
const header = document.querySelector('header');
const gnb = document.querySelector('.gnb');
const toggle_btn = document.querySelector('.gnb_toggle_btn');
const depth_01 = document.querySelectorAll('.depth_01 > li > a');

const lnb_depth_02 = document.querySelector('.lnb_depth_02');


toggle_btn.addEventListener('click', function(){
    this.classList.toggle('on');
    body.classList.toggle('toggle_on');
});

depth_01.forEach(function(e){
    e.addEventListener('click', function(a){
        a.preventDefault();
        this.parentNode.classList.toggle('on');
    });
});

lnb_depth_02.addEventListener('click', function(e){
    e.preventDefault();
    this.classList.toggle('on');
});