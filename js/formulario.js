jQuery(document).ready(function($){

  var formulario = $('#formulario');
  var formularioNombre  = $('#formulario-nombre');
  var formularioCorreo  = $('#formulario-correo');
  var formularioMensaje = $('#formulario-mensaje');
  var enviar = $('#formulario-enviar-boton');
  var ajaxUrl = page_attr.admin_ajax;

  enviar.on('click', function(){
    formulario.submit();
  });

  formulario.on('submit', function() {
    event.preventDefault();
    enviar.attr('disabled', 'disabled');
    var data = $(this).serialize();
    console.log(data);

    if( !formularioNombre.val() ) {
      enviar.removeAttr('disabled');
      alert('Falta dato');
    } else if( !formularioCorreo.val() ) {
      enviar.removeAttr('disabled');
      alert('Falta dato');
    } else if( !formularioMensaje.val() ) {
      enviar.removeAttr('disabled');
      alert('Falta dato');
    } else {
      $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: data,
        cache: false,
        beforeSend: function() {
          //
        },
        succes: function(respuesta) {
          if ( respuesta == 1 ) {
            alert('Mensaje guardado');
          } else {
            alert('ERROR');
          }
        }
      })
    }
    return false;
  });

});
