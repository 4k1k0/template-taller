<?php get_header(); ?>

<!-- Acerca de mi -->
<section class="intro text-center section-padding color-bg" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 wp1">
        <h1 class="arrow">
          Acerca <span>de </span> mi
        </h1>
        <?php
          $args = array(
            'pagename' => 'acerca'
          );
          $query = new WP_Query($args);
          if($query->have_posts()):
            while($query->have_posts()): $query->the_post();
              the_content();
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </div>
</section>
<!-- Termina Acerca de mi -->

<!-- Servicios -->
<section class="features text-center section-padding" id="service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="arrow">
          Esto es lo que hago
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="services">

          <?php
            $args = array(
              'pagename' => 'que-hago'
            );
            $query = new WP_Query($args);
            if($query->have_posts()):
              while($query->have_posts()): $query->the_post();
          ?>

          <div class="col-md-6 wp2 item">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <h2>Escritora</h2>
            <p>
              <?php the_field('escritora'); ?>
            </p>
          </div>

          <div class="col-md-6 wp2 item">
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <h2>Traductora</h2>
            <p>
              <?php the_field('traductora'); ?>
            </p>
          </div>

          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>

        </div>

        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<!-- Termina servicios -->

<!-- Portafolio -->
<section class="text-center section-padding" id="blog">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h1 class="arrow">Últimas <span>Publicaciones</span></h1>
      </div>
    </div><br><br>

    <div class="row">
      <div id="blogSlider">
        <?php
          $args = array(
            'post_type' => 'articulos',
            'posts_per_page' => 3
          );
          $query = new WP_Query($args);

          if($query->have_posts()):
            while($query->have_posts()): $query->the_post();

        ?>
        <div class="col-md-4 wp4">
          <div class="overlay-effect effects clearfix">
            <div class="img img-blog-contenedor">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <br>
          <h2>
            <a href="<?php the_field('url'); ?>" target="_blank"><?php the_title(); ?></a>
          </h2>
          <?php the_content(); ?>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </div>
</section>
<!-- Termina Portafolio -->

<!-- Contacto -->
<section class="text-center section-padding contact-wrap" id="contact">
  <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="arrow">Medios <span>de</span> contacto</h1>
      </div>
    </div>
    <?php
      $args = array(
        'pagename' => 'medios-de-contacto'
      );
      $query = new WP_Query($args);
      if($query->have_posts()):
        while($query->have_posts()): $query->the_post();
    ?>
    <div class="row contact-details">
      <div class="col-md-4">
        <div class="dark-box box-hover">
          <h2><i class="fa fa-map-marker"></i><span>Dirección</span></h2>
          <p>
            <?php the_field('direccion'); ?>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="dark-box box-hover">
          <h2><i class="fa fa-whatsapp"></i><span>Teléfono</span></h2>
          <p><?php the_field('telefono'); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="dark-box box-hover">
          <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
          <p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
        </div>
      </div>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
      endif;
    ?>
    <div class="row">

      <div class="col-md-12 contact">
        <form id="formulario" role="form" action="registro" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="formulario-nombre" type="text" class="form-control" placeholder="Nombre" required name="nombre">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input id="formulario-correo" type="email" class="form-control" placeholder="correo@electronico.com" required name="correo">
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="hidden" name="action" value="registro">
            <textarea id="formulario-mensaje" class="form-control" placeholder="Escribe tu mensaje aquí" style="height:100px;" required name="mensaje"></textarea>
          </div>
          <button id="formulario-enviar-boton" type="button" class="btn btn-send">
            Enviar
          </button>
        </form>
      </div>

    </div>
    <br>
    <!-- Social Buttons - use font-awesome, past in what you want -->
    <div class="row">
      <div class="col-md-12">
        <ul class="social-buttons">
          <?php
            $args = array(
              'pagename' => 'redes-sociales'
            );
            $query = new WP_Query($args);
            if($query->have_posts()):
              while($query->have_posts()): $query->the_post();
          ?>
                <?php if(get_field('twitter') != ""): ?>
                  <li><a href="<?php the_field('twitter'); ?>" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                <?php endif; ?>

                <?php if(get_field('facebook') != ""): ?>
                  <li><a href="<?php the_field('facebook'); ?>" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                <?php endif; ?>

                <?php if(get_field('youtube') != ""): ?>
                  <li><a href="<?php the_field('youtube'); ?>" class="social-btn"><i class="fa fa-youtube"></i></a></li>
                <?php endif; ?>

                <?php if(get_field('instagram') != ""): ?>
                  <li><a href="<?php the_field('instagram'); ?>" class="social-btn"><i class="fa fa-instagram"></i></a></li>
                <?php endif; ?>

                <?php if(get_field('linkedin') != ""): ?>
                  <li><a href="<?php the_field('linkedin'); ?>" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
                <?php endif; ?>
          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Termina Contacto -->

<?php get_footer(); ?>
