<?php

  add_theme_support('post-thumbnails');

  add_action(
    'wp_enqueue_scripts',
    'registrar_archivos',
    1
  );

  function registrar_archivos() {
    // wp_register_style(
    //   'nombre-de-la-hoja-de-estilo',
    //   get_template_directory_uri() . "/assets/csss/archivo.css"
    // );
    // wp_register_script(
    //   'nombre-del-script',
    //   get_template_directory_uri() . "/assets/js/archivo.js"
    // );

    wp_register_style(
      'bootstrap',
      get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css'
    );
    wp_register_style(
      'font-awesome',
      get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css'
    );
    wp_register_style(
      'lightbox',
      get_template_directory_uri() . '/assets/lightbox/css/lightbox.css'
    );
    wp_register_style(
      'text-trotator',
      get_template_directory_uri() . '/assets/textrotator/simpletextrotator.css'
    );
    wp_register_style(
      'flex-slider',
      get_template_directory_uri() . '/assets/flexslider/flexslider.css'
    );
    wp_register_style(
      'main',
      get_template_directory_uri() . '/css/style.css'
    );
    wp_register_style(
      'animate',
      get_template_directory_uri() . '/css/animate.css'
    );

    wp_register_script(
      'jquery',
      get_template_directory_uri() . "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"
    );
    wp_register_script(
      'smoothscroll',
      get_template_directory_uri() . "/assets/smoothscroll/smoothscroll.js"
    );
    wp_register_script(
      'bootstrap',
      get_template_directory_uri() . "/assets/bootstrap/js/bootstrap.min.js"
    );
    wp_register_script(
      'waypoints',
      get_template_directory_uri() . "/js/waypoints.min.js"
    );
    wp_register_script(
      'classie',
      get_template_directory_uri() . "/js/classie.js"
    );
    wp_register_script(
      'flexslider',
      get_template_directory_uri() . "/assets/flexslider/jquery.flexslider.js"
    );
    wp_register_script(
      'modernizr',
      get_template_directory_uri() . "/js/modernizr.js"
    );
    wp_register_script(
      'text-rotator',
      get_template_directory_uri() . "/assets/textrotator/jquery.simple-text-rotator.js"
    );
    wp_register_script(
      'lightbox',
      get_template_directory_uri() . "/assets/lightbox/js/lightbox.min.js"
    );
    wp_register_script(
      'main',
      get_template_directory_uri() . "/js/main.js"
    );
    wp_register_script(
      'main-2',
      get_template_directory_uri() . "/js/script.js"
    );
    wp_register_script(
      'formulario',
      get_template_directory_uri() . "/js/formulario.js"
    );
    // AJAX
    $php_array = array( 'admin_ajax' => admin_url('admin-ajax.php') );
    wp_localize_script(
      'formulario',
      'page_attr',
      $php_array
    );

  }

  add_action(
    'wp_enqueue_scripts',
    'agregar_archivos'
  );

  function agregar_archivos() {
    // CSS
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('lightbox');
    wp_enqueue_style('text-trotator');
    wp_enqueue_style('flex-slider');
    wp_enqueue_style('main');
    wp_enqueue_style('animate');
    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('smoothscroll');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('classie');
    wp_enqueue_script('flexslider');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('text-rotator');
    wp_enqueue_script('lightbox');
    wp_enqueue_script('main');
    wp_enqueue_script('main-2');
    wp_enqueue_script('formulario');
  }

  include('post-type.php');
  include('taxonomias.php');
  include('insertar-db.php');

  function usuario_registrado() {
    $user = wp_get_current_user();
    return $user->exists();
  }


?>
