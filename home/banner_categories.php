<?php
$terms = get_terms(array(
    'taxonomy'   => 'categoria_do_produto',
    'hide_empty' => false,
));



?>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Demo styles -->

<section id="section-categories-home" class="container w-full">
    <div class="swiper mySwiper shelf-categories">
        <div class="swiper-wrapper">
            <?php foreach ($terms as $term): ?>
                <a href="/produto/categoria/<?php echo $term->slug ?>" class="swiper-slide">
                    <?php $imageUrl =  get_field('image', $term) ?>
                    <img src="<?php echo $imageUrl ?>" width="400" class="imgs_categories">
                </a>
            <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
    </div>

</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".shelf-categories", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 1,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });
</script>