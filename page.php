<?php get_header(); ?>

<?php
  if(usuario_registrado()) {
?>
<!-- Mensajes -->
<div class="container">
  <h1 class="text-center">
    Mensajes
  </h1>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $mensajes = $wpdb->get_results("SELECT * FROM wp_mensajes ORDER BY id DESC");
            foreach ($mensajes as $mensaje) {
          ?>
              <tr>
                <td><?php echo $mensaje->fecha; ?></td>
                <td><?php echo $mensaje->nombre; ?></td>
                <td><a href="mailto:<?php echo $mensaje->correo; ?>"><?php echo $mensaje->correo; ?></a></td>
                <td><?php echo $mensaje->mensaje; ?></td>
              </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Termina Mensajes -->
<?php
  } else {
    echo "<h1>Inicia sesión</h1>";
  }
?>

<?php get_footer(); ?>
