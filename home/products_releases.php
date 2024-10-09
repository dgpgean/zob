<?php
$titleShelf1 = get_option('banner1-title-products-settings');
$categoryProductShelf1 = get_option('banner1-category-products-settings');
$query = new WP_Query([
    'post_type'      => 'Produtos',
    'posts_per_page' => '10',
    'tax_query' => array(
        array(
            'taxonomy' => 'categoria_do_produto',
            'field' => 'slug',
            'terms' => $categoryProductShelf1
        ),
    ),
]); ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Demo styles -->
<style>

</style>
<section class="container shelf" id="section-products-banner">
    <img src="<?php echo get_option('banner1-image')  ?>" height="100%" width="100%" alt="">
    <div class="banner_products">
        <h3 class="titles-desk"><?php echo $titleShelf1 ?></h3>
        <!-- Swiper -->
        <div class="swiper mySwiper products_releases">
            <div class="swiper-wrapper">
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php $imageProduct = get_field('imagens')['principal'] ?>
                        <a class="swiper-slide  card_product flex flex-col items-center product" href="<?php the_permalink() ?>">
                            <img src="<?php echo $imageProduct ?>" alt="">
                            <span><?php the_title() ?></span>
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination releases"></div>
        </div>

    </div>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".products_releases", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false
        // },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {

                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 50,
            },
        },
    });
</script>