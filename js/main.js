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
// var consulta = window.matchMedia('(max-width: 768px)');
// consulta.addListener(mediaQuery);

// var $burguerButton = document.getElementById('burguer-button');
// var $menu = document.getElementById('menu');
// function toggleMenu(){
//   $menu.classList.toggle('active')
//   $burguerButton.classList.toggle('icon-close'); 
// };
// function showMenu(){
//   $menu.classList.add('active');
// };
// function hideMenu(){
//   $menu.classList.remove('active');
// };

// function mediaQuery() {
//   if (consulta.matches) {
//           // si se cumple hagamos esto
//           console.log('se cumplió la condicion');
//           $burguerButton.addEventListener('touchstart', toggleMenu);
//         } else {
//           $burguerButton.removeEventListener('touchstart', toggleMenu);
//           // si no se cumple hagamos esto
//           console.log('no se cumplió la condicion');
//         }
//       }
// mediaQuery();
// // Gestos touch
// var $body = document.body;

// var gestos = new Hammer($body);
// gestos.on('swipeleft', hideMenu);
// gestos.on('swiperight', showMenu);
// Gestos en Movil

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