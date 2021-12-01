<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('frontend.partials.head')
</head>

<body>
    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- (Custom js for all blocks) -->
    {{-- <script src="js/script.js"></script> --}}
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}

    <!-- AOS animation - initialize -->
    <script>
        AOS.init();
    </script>

    <script>
        /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-100px";
            }
            prevScrollpos = currentScrollPos;
        };

        // var swiper = new Swiper(".jumbotron .mySwiper", {
        //     autoHeight: true,
        //     slidesPerView: 1,
        //     spaceBetween: 0,
        //     loop: true,
        //     autoplay: {
        //         delay: 4000,
        //         disableOnInteraction: true,
        //     },
        //     navigation: {
        //         nextEl: ".swiper-button-next",
        //         prevEl: ".swiper-button-prev",
        //     },
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        // });

        // var swiper = new Swiper(".section-four .mySwiper", {
        //     slidesPerView: 1,
        //     spaceBetween: 0,
        //     loop: true,
        //     autoplay: {
        //         delay: 5000,
        //         disableOnInteraction: true,
        //     },
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        // });

        // var swiper = new Swiper(".section-three .mySwiper", {
        //     autoHeight: true,
        //     slidesPerView: 1,
        //     spaceBetween: 0,
        //     slidesPerGroup: 1,
        //     loop: true,
        //     loopFillGroupWithBlank: true,
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        //     breakpoints: {
        //         768: {
        //             slidesPerView: 2,
        //             spaceBetween: 20,
        //             slidesPerGroup: 2,
        //         },
        //         1024: {
        //             slidesPerView: 3,
        //             spaceBetween: 20,
        //             slidesPerGroup: 3,
        //         },
        //     },
        // });
    </script>
</body>

</html>
