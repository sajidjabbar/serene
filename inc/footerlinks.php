<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<!-- Wow Js CDN -->

<script>
// Banner Slider Js
$('.banner_slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
});
// Banner Slider Js

// Off Slider Js
$('.off_sec .content-wrapper').slick({
    fade: true,
    dots: true,
    arrows: false,
    slidesToShow: 1,
});
// Off Slider Js

// Rings Slider Js
$('.ring-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});
// Rings Slider Js

// Rings Slider Js
$('.vendor-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots : false,
    loop : true,
    responsive: [{
            breakpoint: 1150,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});
// Rings Slider Js

// Product Detail Slider Js
$('.single-image').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.all-images'
});
$('.all-images').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.single-image',
    dots: false,
    centerMode: false,
    focusOnSelect: true
});
// Product Detail Slider Js
</script>