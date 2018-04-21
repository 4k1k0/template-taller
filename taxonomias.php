<?php

function cat_articulo_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Tipos', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tipo', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tipo', 'text_domain' ),
		'all_items'                  => __( 'Todos los items', 'text_domain' ),
		'parent_item'                => __( 'Parent item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Nombre de nuevo tipo', 'text_domain' ),
		'add_new_item'               => __( 'Añadir nuevo tipo', 'text_domain' ),
		'edit_item'                  => __( 'Editar tipo', 'text_domain' ),
		'update_item'                => __( 'Actualizar tipo', 'text_domain' ),
		'view_item'                  => __( 'Ver item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar tipos con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Añadir o remover tipos', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Tipos', 'text_domain' ),
		'search_items'               => __( 'Buscar items', 'text_domain' ),
		'not_found'                  => __( 'No encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No hay items', 'text_domain' ),
		'items_list'                 => __( 'Lista de items', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'tipo_de_articulo', array( 'articulos' ), $args );

}
add_action( 'init', 'cat_articulo_taxonomy', 0 );

?>
