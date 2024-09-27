<?php
get_header();

//Banner principal
echo do_shortcode(get_option('banner_main_settings_field'));


//Banner informações
require('home/warningBanner.php');

require('home/products_releases.php');

require('home/banner_categories.php');

require('home/sunglasses.php');

echo do_shortcode(get_option('banner_section_settings_field'));


?>

  

<?php get_footer(); ?>