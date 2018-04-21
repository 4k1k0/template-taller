<?php

  function articulos_post_type() {
  $labels = array(
    'name'                  => _x( 'Artículos', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Articulo', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Artículos', 'text_domain' ),
    'name_admin_bar'        => __( 'Artítulo', 'text_domain' ),
    'archives'              => __( 'Artículos archivos', 'text_domain' ),
    'attributes'            => __( 'Artículos atributos', 'text_domain' ),
    'parent_item_colon'     => __( 'Artículo padre', 'text_domain' ),
    'all_items'             => __( 'Todos los artículos', 'text_domain' ),
    'add_new_item'          => __( 'Añadir nuevo artículo', 'text_domain' ),
    'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
    'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
    'edit_item'             => __( 'Editar artículo', 'text_domain' ),
    'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
    'view_item'             => __( 'Ver artículo', 'text_domain' ),
    'view_items'            => __( 'Ver elementos', 'text_domain' ),
    'search_items'          => __( 'Buscar elemento', 'text_domain' ),
    'not_found'             => __( 'No encontrado', 'text_domain' ),
    'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
    'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
    'set_featured_image'    => __( 'Set imagen destacada', 'text_domain' ),
    'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
    'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
    'insert_into_item'      => __( 'Insertar en artículo', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Cargado a este artículo', 'text_domain' ),
    'items_list'            => __( 'Lista de artículos', 'text_domain' ),
    'items_list_navigation' => __( 'Navegar lista de artículos', 'text_domain' ),
    'filter_items_list'     => __( 'Filtrar lista de artículos', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Articulo', 'text_domain' ),
    'description'           => __( 'Artículos', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'tipo_de_articulo' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-book',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'articulos', $args );
  }
  add_action( 'init', 'articulos_post_type', 0 );

?>
