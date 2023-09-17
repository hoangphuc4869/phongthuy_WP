$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.display-pc').addClass('sticky-menu');
        }
        else {
            $('.display-pc').removeClass('sticky-menu');
        }
    })
})


// // menu mobile

var iconBar = document.getElementsByClassName('icon-bar')[0];

var menuMobile = document.getElementsByClassName('bg-menu-mobile')[0];
var menuMobile2 = document.getElementsByClassName('menu-mobile')[0];


iconBar.onclick = function() {
    menuMobile.classList.add('active-mobile');
}

menuMobile.onclick = function() {
    menuMobile.classList.remove('active-mobile');
}

menuMobile2.addEventListener('click', function(event) {
  event.stopPropagation();
});



// slider banner

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next'><i class='far fa-chevron-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})