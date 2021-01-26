const expresiones = {
	letrasynumeros: /^[a-zA-ZÀ-ÿ0-9\s]{1,40}$/, // Letras, numeros, guion y guion_bajo
	soloLetras: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^[a-zA-Z0-9!"#$%&/()=?¡¿]{1,18}$/, 
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  numeros: /^\d{7,14}$/,
  promedio: /^[0-9.]{1,4}$/ ,
  curp: /^[a-zA-Z0-9\s]{1,18}$/
}

function validacion(event,regex){
    let value = event.currentTarget.value;
    let valorTecla = String.fromCharCode(event.keyCode);
    console.log(valorTecla);
    var cadena = value+valorTecla;
    var result = regex.test(cadena);
    if(!result){
      event.preventDefault()
    }
  }

let curp2 = document.getElementById('curp_inicio');
    curp2.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.curp)
});

let pass = document.getElementById('pass');
    pass.addEventListener('keypress',(event)=>{
    validacion(event,expresiones.password)
});
