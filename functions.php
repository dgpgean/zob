<?php


function zob_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_style('zob-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('zob-media', get_template_directory_uri() . '/media.css');
}

add_action('wp_enqueue_scripts', 'zob_scripts');





// Configurações personalizadas
require('customSettings/home/index.php');


// Posts personalizados
require('customPosts/products.php');
