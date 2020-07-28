// настройки owl-carousel
var owl = $('.owl-carousel').owlCarousel({
    margin: 30,	
    loop: true,
    responsiveClass:true,
    nav: true,
	navText : ["",""],
    dots: true,
    dotsEach: true,
    responsive:{
        0:{
            items:1,
        },
        450:{
            items: 2,
        },
        768:{
            items:3,
        },
        1024:{
            items:4
        }
    }
});

$(".next-arrow").click(function(){
	owl.trigger("next.owl.carousel");
});
$(".prev-arrow").click(function(){
	owl.trigger("prev.owl.carousel");
});

// свойста header при скролле
window.addEventListener("scroll", changeHeaderOnScroll);

function changeHeaderOnScroll() {
  let header = document.querySelector(".header");

  if (window.pageYOffset > 0 ) {
    header.classList.add("header-opacity");

    // отменяем изменения при наведении
    header.addEventListener("mouseover", function() {
      if(!$('.navbar')[0].classList.contains('navbar-active')){
        header.classList.remove("header-opacity");
      }
    });
    header.addEventListener("mouseout", function() {
        header.classList.add("header-opacity");
    });
  } 
  else if(!$('.navbar')[0].classList.contains('navbar-active')) {
    header.classList.remove("header-opacity");
  }
}

// плавный переход по якорям
const anchors = document.querySelectorAll('a[href*="#"]');
const headerOffset = 60;
for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    
    // узнаем позицию элемента
    var elementPosition = document.getElementById(anchor.getAttribute('href').substr(1)).getBoundingClientRect().top;
    // узнаем значения, нужное для смещения
    var offsetPosition = elementPosition - headerOffset + window.pageYOffset;
    // прокручиваем до элемента
    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
    });
  })
}

// массив секций
let sections = document.querySelectorAll('section');
// отступ до центра экрана
let offsetToCenter = document.documentElement.clientHeight / 2;
// последняя добавленная точка
let lastIndex = 0;

changeDotPosition();
window.addEventListener("scroll", changeDotPosition);

function changeDotPosition() {
  let YOffset = window.pageYOffset;
  let k = 0;
  let rect = [];
  for(let section of sections) {
    rect[k] = section.getBoundingClientRect();
    k++;
  }
  
  for(let i = 0; i < k; i++) {
    if(rect[i].top < offsetToCenter && rect[i].bottom > offsetToCenter) {
      document.querySelector('.navbar ul li:nth-child(' + (i+1) +') a').classList.add('dot');
      lastIndex = i;
    }
    // проверка, чтобы точка не удалялась, пока не добавилась другая
    else if (lastIndex != i){
      document.querySelector('.navbar ul li:nth-child(' + (i+1) +') a').classList.remove('dot');
    }
  }
}


const navBurger = () => {
  const burger = document.querySelector('.burger');
  const navbar = document.querySelector('.navbar');
  const header = document.querySelector('.header');

  burger.addEventListener('click', () => {
    navbar.classList.toggle('navbar-active');
    burger.classList.toggle('burger-active');
    header.classList.add('header-opacity');
  });
}
navBurger();