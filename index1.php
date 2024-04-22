<?php include "./includes/header.php" ?>

<div id="pageWrapper">




    <!-- Banner Section  -->
    <section class="banner-section">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner__contents">
                        <div class="container">
                            <div class="banner__title">
                                The keys to
                                <span>your desired castle</span>
                            </div>
                            <p>Passion means we use our drive and commitment
                                to energize, engage and inspire others.</p>
                            <a href="javascript:void(0);" class="baseBtn hoveranim"><span>START NOW</span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner__contents">
                        <div class="container">
                            <div class="banner__title">
                                The keys to
                                <span>your desired castle</span>
                            </div>
                            <p>Passion means we use our drive and commitment
                                to energize, engage and inspire others.</p>
                            <a href="javascript:void(0);" class="baseBtn hoveranim"><span>START NOW</span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner__contents">
                        <div class="container">
                            <div class="banner__title">
                                The keys to
                                <span>your desired castle</span>
                            </div>
                            <p>Passion means we use our drive and commitment
                                to energize, engage and inspire others.</p>
                            <a href="javascript:void(0);" class="baseBtn hoveranim"><span>START NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section  -->



    <!-- Touch Swipe  -->
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js">
        </script>

    <!-- owl carousel  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- SCROLL_MAGIC -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
        integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script>
        // Touch Swipe 
        $(".carousel").swipe({
            swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical",
            cycle: true,
            pause: "null"
        });
        // Touch Swipe

        // Testimonial Slider 
        $('.clientsSlide').owlCarousel({
            loop: true,
            lazyLoad: true,
            rewind: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,
            nav: false,
            dots: false,
            margin: 10,
            responsive: {
                0: {
                    items: 2,
                },
                468: {
                    items: 2,
                },
                576: {
                    items: 3,
                },
                768: {
                    items: 3,
                    margin: 20,
                },
                992: {
                    items: 4,
                },
                1200: {
                    margin: 40,
                    items: 5,
                },
            }
        })
        // Testimonial Slider


        // Counter 
        $(document).ready(function () {
            var controller = new ScrollMagic.Controller();

            var scene = new ScrollMagic.Scene({
                triggerElement: '#bannerSec',
                triggerHook: 0.9
            })
                .setClassToggle('#bannerSec', 'isVisible')
                .on("enter", function () {
                    $('#bannerSec .lftSec .dFlx .rFlx .count').each(function () {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 4200,
                            easing: 'swing',
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                                $(this).text(Math.ceil(now).toString().replace(
                                    /(\d)(?=(\d\d\d)+(?!\d))/g, "$1"));
                            }
                        });
                    });
                })
                .reverse(false)
                .addTo(controller);
        });
        // Counter 
    </script>


</div>



<?php include "./includes/footer.php" ?>