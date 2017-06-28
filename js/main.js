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

// Bx Slider
$(document).ready(function(){
  $('.errorMsj').fadeOut();
  descargar();
  $('.bxslider').bxSlider({
    minSlides: 1,
    maxSlides: 4,
    pager: false,
    useCSS: false
  });
});

// Validacion del formulario 1
$('#formularioUno').validate(  {
  rules: {
    nombrePadre: {
      required: true,
      minlength: 5
    },
    nombrePadre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: true,
      minlength: 7
    },
    email: {
      email: true,
      required: true,

    },
    edadAlumno: {
      required: true,
    },
    curso: {
      required: true,
    }
  },
  messages: {
    nombrePadre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    nombreAlumno: {
      required: "Por favor escribe el nombre del alumno",
      minlength: "Tu nombre es demasiado corto"
    },
    telefono: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    email: {
      required: "Por favor escribe tu E-mail",
      minlength: "Escribe un E-mail valido"
    },
    edadAlumno: {
      required: "Por favor completa este campo",
    },
    curso: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form){
    cargar();
    $.post('includes/validation.php',$('#formularioUno').serialize())
    .done(function(data){
      $('.form-control').val('');
      descargar();
      bootbox.alert(data, function() {console.log("Alert Callback");});
      //window.location.href = "?content=gracias";
    })
  }
  // submitHandler: function(form) {
  //   $(form).ajaxSubmit({
  //     type:"POST",
  //     data: $(form).serialize(),
  //     url:"includes/validation.php",
  //     success: function() {
  //       window.location.href = "?content=gracias";
  //     },
  //     error: function() {
  //       $('form').fadeTo( "slow", 0.15, function() {
  //         $('.errorMsj').fadeIn();
  //       });
  //     }
  //   });
  // }

});
// Validacion del formulario 1
$('#formularioDos').validate(  {
  rules: {
    nombrePadre: {
      required: true,
      minlength: 5
    },
    nombrePadre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: true,
      minlength: 7
    },
    email: {
      email: true,
      required: true,

    },
    edadAlumno: {
      required: true,
    },
    curso: {
      required: true,
    }
  },
  messages: {
    nombrePadre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    nombreAlumno: {
      required: "Por favor escribe el nombre del alumno",
      minlength: "Tu nombre es demasiado corto"
    },
    telefono: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    email: {
      required: "Por favor escribe tu E-mail",
      minlength: "Escribe un E-mail valido"
    },
    edadAlumno: {
      required: "Por favor completa este campo",
    },
    curso: {
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
          $('.errorMsj').fadeIn();
        });
      }
    });
  }

});