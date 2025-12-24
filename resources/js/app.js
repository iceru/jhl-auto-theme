window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if(mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()
            mainNavigation.classList.toggle('hidden')
        })
    }
})


$(document).ready(function($) {
    $('.teams').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4.5,
        slidesToScroll: 1,
        appendArrows: $('#team-arrows'),
        // Custom Arrows: White Chevron inside Gray Circle
        prevArrow: '<button class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-500 text-white hover:bg-gray-700 transition-all focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg></button>',
        nextArrow: '<button class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-500 text-white hover:bg-gray-700 transition-all focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3.5,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.5,
                }
            }
        ]
    });
    
    $('#services-slider').slick({
        dots: false,
        infinite: false,
        speed: 500,
        slidesToShow: 3.5, // The magic number for 3 and a half items
        slidesToScroll: 1,
        appendArrows: $('#service-arrows'),
        prevArrow: '<button class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-500 text-white hover:bg-gray-700 transition-all"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg></button>',
        nextArrow: '<button class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-500 text-white hover:bg-gray-700 transition-all"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2.5,
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1.2,
                }
            }
        ]
    });
});