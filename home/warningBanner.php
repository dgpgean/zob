<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section id="warning_banner" style="background-color: <?php echo get_option('banner_color') ?>;">
    <div id="banner-cards" class="container">
        <div class="swiper mySwiper shelf-services">
            <div class="swiper-wrapper ">


                <div class="banner_card swiper-slide ">
                    <i class="<?php echo get_option('banner_icon1') ?>"></i>
                    <p>
                        <?php echo get_option('banner_text1') ?>
                    </p>
                </div>

                <div class="banner_card swiper-slide ">
                    <i class="<?php echo get_option('banner_icon2') ?>"></i>
                    <p>
                        <?php echo get_option('banner_text2') ?>
                    </p>
                </div>

                <div class="banner_card swiper-slide ">
                    <i class="<?php echo get_option('banner_icon3') ?>"></i>
                    <p>
                        <?php echo get_option('banner_text3') ?>
                    </p>
                </div>


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".shelf-services", {


        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
                pagination: {
                    el: ".shelf-services",
                    clickable: true,
                },
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        },
    });
</script>