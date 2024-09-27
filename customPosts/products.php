<?php

// Formações
function post_type_products()
{
	register_post_type(
		'produtos',
		array(
			'labels' =>
			array(
				'name' => __('Produtos'),
				'singular_name' => __('Produto')
			),
			'public' => true,
			'show_ui' => true, // UI in admin panel
			'_builtin' => false, // It's a custom post type, not built in!
			'_edit_link' => 'post.php?post=%d',
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'rewrite' => array('slug' => 'produto'),
			'menu_icon' => '',
			'show_ui' => true,
			'exclude_from_search' => false,
			'show_in_rest' => true, // editor gutenberg	
			'taxonomies' => array('post_tag'),
			'supports' => array('title')
		)
	);
}
add_action('init', 'post_type_products');

register_taxonomy('categoria_do_produto', 'produtos', array(
	'label' => 'Categoria do produto',
	'singular_label' => 'Categoria',
	'public' => TRUE,
	'show_tagcloud' => FALSE,
	'show_in_rest' => TRUE,
	'hierarchical' => TRUE,
	'query_var' => TRUE,
	'rewrite' => array(
		'slug' => 'produto/categoria'
	),
));



function controlador_de_leitura($query)
{
	if (!is_admin()) {
		if ($query->is_tax('categoria_do_produto') && $query->is_main_query()) {
			$query->set('showposts', '5');
		}
	}
}

add_action('pre_get_posts', 'controlador_de_leitura');
