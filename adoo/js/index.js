
	function enviaFalso(){
        var formulario = $("#inicio").serialize();
        console.log(formulario);
        $.ajax({
            method:"POST", 
            url:"../php/inicioAjax.php", 
            data: {
				'usuario':$("#usuario").val(),
				'contra':$("#pass").val()				
			},
			cache:false, 
            success:function(respAX){
				let AX = JSON.parse(respAX);
				if(AX.cod == 1 && AX.tipoU == "admin"){
					let promise = Swal.fire({
                    title: 'Login exitoso',
                    text:AX.msj,
                    icon: 'success',
                    confirmButtonText: 'Continuar'
                })
                promise.then((successMessage)=>{
					$(location).attr('href','../php/administrador.php')
                    
                })
				}
				if(AX.cod == 0){
					let promise = Swal.fire({
                    title: '¡Upps!',
                    text:AX.msj,
                    icon: 'error',
                    confirmButtonText: 'Continuar'
                })
                promise.then((successMessage)=>{
                    $(location).attr('href','../web-pages/index.html')
					})
				}
            }
        });
		return false;
   }
