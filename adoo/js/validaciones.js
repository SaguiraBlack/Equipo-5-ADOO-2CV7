/*const expresiones = {
	letrasynumeros: /^[a-zA-ZÀ-ÿ0-9\s]{1,40}$/, // Letras, numeros, guion y guion_bajo
	soloLetras: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^[a-zA-Z0-9!"#$%&/()=?¡¿]{1,18}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  numeros: /^\d{7,14}$/,
  promedio: /^[0-9.]{1,4}$/ ,
  curp: /^[a-zA-Z0-9\s]{1,18}$/
}

/* VALIDAR SÓLO NÚMEROS */
/* Teléfono alumno */
/*let telefono = document.getElementById('telefono_alumno');
telefono.addEventListener('keypress',(event)=>{
    event.preventDefault()
    if(telefono.value.length == 10){
        return;
    }
    let valorTecla = String.fromCharCode(event.keyCode)
    let valorParsed = parseInt(valorTecla)
    if(valorParsed) {
      telefono.value = telefono.value + valorParsed
    }
});
/* Número de calle */
/*let numeroCalle = document.getElementById('num_calle_alumno');
numeroCalle.addEventListener('keypress',(event)=>{
    event.preventDefault()
    let valorTecla = String.fromCharCode(event.keyCode)
    let valorParsed = parseInt(valorTecla)
    if(valorParsed) {
      numeroCalle.value = numeroCalle.value + valorParsed
    }
});
/* Boleta del alumno */

/* VALIDAR SÓLO LETRAS */
/*function validacion(event,regex){
  let value = event.currentTarget.value;
  let valorTecla = String.fromCharCode(event.keyCode);
  var cadena = value+valorTecla;
  var result = regex.test(cadena);
  if(!result){
    event.preventDefault()
  }
}

let nombreAlumno = document.getElementById('nombre_alumno');
nombreAlumno.addEventListener('keypress',(event)=>{
   validacion(event,expresiones.soloLetras)
});

let primerApellidoAlumno = document.getElementById('primer_ap_alumno');
primerApellidoAlumno.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.soloLetras)
});

let segundoApellidoAlumno = document.getElementById('segundo_ap_alumno');
segundoApellidoAlumno.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.soloLetras)
});

let municipio = document.getElementById('municipio_alumno');
municipio.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.soloLetras)
});

let colonia = document.getElementById('colonia_alumno');
colonia.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.soloLetras)
});

let formacionTecnica = document.getElementById('formacion_tecnica');
formacionTecnica.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.soloLetras)
});

/* VALIDAR CALLE (LETRAS Y NÚMEROS) */
/*let calle = document.getElementById('calle_alumno');
calle.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.letrasynumeros)
});

let password = document.getElementById('pass_registro');
    password.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.password)
});

/* CURP */
/*let curp = document.getElementById('curp_alumno');
curp.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.curp)
});



let nombreEscuelaProcedencia = document.getElementById('nombre_escuela');
nombreEscuelaProcedencia.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.letrasynumeros)
});

let localidadEscuela = document.getElementById('localidad_escuela');
localidadEscuela.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.letrasynumeros)
});

/* VALIDAR PROMEDIO (Numero decimal) */
/*let promedio = document.getElementById('promedio');
promedio.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.promedio)
});


/* VALIDAR PASSWORD */
/*let pass = document.getElementById('pass_registro');
    pass.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.password)
});



/* INICIALIZACIÓN DEL CALENDARIO DATEPICKER */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var options = {
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
        selectMonths: true,
        selectYears: 30,
        today: 'Hoy',
        clear: 'Limpiar',
        close: 'Ok',
        labelMonthNext: 'Siguiente mes',
        labelMonthPrev: 'Mes anterior',
        labelMonthSelect: 'Selecciona un mes',
        labelYearSelect: 'Selecciona un año',
        yearRange: 10,
        defaultDate: new Date(2000,1,1),
        maxDate: new Date(2008,1,1),
        format: "yyyy-mm-dd"
      }
    var instances = M.Datepicker.init(elems, options);
  });

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
    var options = {
      
    }
    var instances = M.FormSelect.init(elems, options);

  });
