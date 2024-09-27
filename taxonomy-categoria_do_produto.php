<?php
get_header();

$terms = get_terms('categoria_do_conteudo');
$category = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
echo do_shortcode(get_field('banner_da_categoria', $category));

?>

<section class="container flex flex-col items-center" id="categoories-products">
    <div class="cards_produts flex justify-center wrap">
        <?php while (have_posts()) : the_post(); ?>
            <a class="card_product flex flex-col items-center product" href="<?php the_permalink() ?>">
                <img src="<?php echo get_field('imagens')['principal'] ?>" alt="">
                <span> <?php the_title() ?> </span>
            </a>
        <?php endwhile; ?>
    </div>
    <div>
        <?php echo paginate_links(); ?>
    </div>
</section>


<?php
get_footer();
?>