const navbar = document.getElementById('nav-home');
window.addEventListener('scroll', function() {
    console.log(window.scrollY);
    if (window.scrollY > 1){
        navbar.classList.replace('bg-transparent', 'dark');
    } else if (window.scrollY <= 0){
        navbar.classList.replace('dark', 'bg-transparent');
    }
});
$('.owl-one').owlCarousel({
    loop: false,
    margin: 15,
    nav: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
$('.owl-two').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1
        }
    }
})
$('.owl-des').owlCarousel({
    loop: false,
    margin: 15,
    nav: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1
        },
        300: {
            items: 2
        },
        650: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})

$('#check-in').datepicker();