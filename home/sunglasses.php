<?php $query = new WP_Query([
    'post_type'      => 'Produtos',
    'posts_per_page' => '10',
]); ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Demo styles -->

<section class="container shelf " id="section-products-sunglasses">
    <div class="banner_products">
        <h3 class="titles-desk">Óculos de Sol</h3>
        <!-- Swiper -->
        <div class="swiper mySwiper shelf-sunglasses">

            <div class="swiper-wrapper">
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php $imageProduct = get_field('imagens')['principal'] ?>
                        <a class="swiper-slide  card_product flex flex-col items-center product" href="<?php the_permalink() ?>">
                            <img src="<?php echo $imageProduct ?>" alt="">
                            <span>Óculos De Sol – Zob Vibe Hex – Unisex</span>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="swiper-button-next shelf-sunglasses"></div>
            <div class="swiper-button-prev shelf-sunglasses"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".shelf-sunglasses", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            640: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            },
        },
    });
</script>