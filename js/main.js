 // Cargar
function cargar(){
  $('#loader').fadeIn();
}
// Descargar
function descargar(){
  $('#loader').fadeOut();
}
// carga asincronica de las imagenes
var bLazy = new Blazy({ 
  selector: '.lazyImg' // all images
});

// Gestos en Movil
 var $cta = document.getElementById('cta');
 var $cta2 = document.getElementById('cta2');
 var $ctaAction = document.getElementById('ctaAction');
 function toggleMenu(){
   $ctaAction.classList.toggle('active')
   $cta.classList.toggle('icon-close'); 
 };
 function showForm(){
   $ctaAction.classList.add('active');
 };
 function hideForm(){
   $ctaAction.classList.remove('active');
 };

$cta.addEventListener('touchstart', toggleMenu);

  //Gestos touch
 var $body = document.body;

 var gestos = new Hammer($body);
 gestos.on('swipeleft', hideForm);
 gestos.on('swiperight', showForm);

// Bx Slider
$(document).ready(function(){
  descargar();
  $('.bxslider').bxSlider({
    minSlides: 1,
    maxSlides: 4,
    slideWidth: 370,
    slideMargin: 15
  });
});

// Validacion del formulario
$('form').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: true,
      minlength: 7
    },
    correo: {
      email: true,
      required: true,

    },
    empresa: {
      required: true,
    },
    sector: {
      required: true,
    },
    empleados: {
      required: true,
    },
    cargo: {
      required: true,
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    telefono: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    correo: {
      required: "Por favor escribe tu E-mail",
      minlength: "Escribe un E-mail valido"
    },
    empresa: {
      required: "Por favor completa este campo",
    },
    sector: {
      required: "Por favor selecciona un opsión",
    },
    empleados: {
      required: "Por favor completa este campo",
    },
    cargo: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form) {
    $(form).ajaxSubmit({
      type:"POST",
      data: $(form).serialize(),
      url:"includes/validation.php",
      success: function() {
        window.location.href = "/gracias";
      },
      error: function() {
        $('form').fadeTo( "slow", 0.15, function() {
          $('#error').fadeIn();
        });
      }
    });
  }

});