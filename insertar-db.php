<?php

  add_action( 'wp_ajax_registro', 'registro_init' );
  add_action( 'wp_ajax_nopriv_registro', 'registro_init' );

  function registro_init() {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $fecha = date('Y-m-d');

    global $wpdb;

    $wpdb->insert(
      'wp_mensajes',
      array(
        'nombre' => $nombre,
        'correo' => $correo,
        'mensaje' => $mensaje,
        'fecha' => $fecha
      )
    );
    echo "1";
    wp_die();
  }

?>
