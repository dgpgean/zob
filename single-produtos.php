<?php
get_header();

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<section id="pdp-header" class="container">

    <div class="side-left">
        <div class="swiper mySwiper pdp">
            <div class="swiper-wrapper">
                <?php $keyImage = 0 ?>
                <?php foreach (get_field('imagens') as $key => $image): ?>
                    <?php $keyImage += 1 ?>
                    <img src="<?php echo $image ?>" data-key="<?php echo $keyImage ?>" alt="" class="swiper-slide product-image">
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination">
            </div>
        </div>

    </div>

    <div class="side-right flex flex-col ">
        <div class="product-title">
            <?php the_title() ?>
        </div>

        <div class="flex flex-col product-info">
            <span class="font-700">
                Marca: <span class="font-400"><?php the_field('marca') ?></span>
            </span>
            <span class="font-700">
                Referência: <span class="font-400"><?php the_field('code') ?></span>
            </span>
        </div>

        <div>
            <p>Compre através da nossa loja no Mercado Livre.</p>
            <a href="<?php echo get_field('mercado_livre') ?>" target="__blank">
                <img src="<?php echo get_template_directory_uri() . '/images/mercado-livre.webp' ?>" alt="">
            </a>
        </div>

    </div>
</section>

<section class="container product-description">
    <h2>Descrição</h2>
    <?php the_field('descricao') ?>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".pdp", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    const images = document.querySelectorAll('.product-image')
    images.forEach(image => {
        let component = document.querySelectorAll('.swiper-pagination-bullet')
        let keyImage = image.getAttribute('data-key')
        let urlImage = image.getAttribute('src')
        component.forEach(comp => {
            let arial = comp.getAttribute('aria-label')

            if (arial == `Go to slide ${keyImage}`) {
                comp.style.backgroundImage = `url(${urlImage})`
            }



        })
    })
</script>

<?php
get_footer();
?>