const body = document.querySelector('body');
const header = document.querySelector('header');
const gnb = document.querySelector('.gnb');
const toggle_btn = document.querySelector('.gnb_toggle_btn');
const language = document.querySelector('.language');






header.addEventListener('mouseover', function(){
    if(!body.classList.contains('toggle_on')){
        this.classList.add('active');
    }
});

header.addEventListener('mouseout', function(){
    this.classList.remove('active');
});

toggle_btn.addEventListener('click', function(){
    this.classList.toggle('on');
    body.classList.toggle('toggle_on');
});

language.addEventListener('click', function(){
    this.classList.add('on');
});

language.addEventListener('mouseleave', function(){
    this.classList.remove('on');
});