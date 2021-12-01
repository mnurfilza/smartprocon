<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".section-three .mySwiper", {
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
                slidesPerGroup: 2,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
                slidesPerGroup: 3,
            },
        },
    });
</script>
