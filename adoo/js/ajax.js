$(document).ready(function(){  
	
   $("#registro").submit(function(e){
        e.preventDefault();
        var formulario = $("#registro").serialize();
        console.log(formulario);
        $.ajax({
            method:"POST", 
            url:"http://localhost/rock_lml/php/registroBanda.php", 
            data: formulario,
			cache:false, 
            success:function(respAX){
				let AX = JSON.parse(respAX);
				if(AX.cod == 1){
					let promise = Swal.fire({
                    title: '¡Perfecto!',
                    text:AX.msj,
                    icon: 'success',
                    confirmButtonText: 'Continuar'
                })
                
				}else if(AX.cod == 0){
					let promise = Swal.fire({
                    title: '¡Upps!',
                    text: 'Mensaje:'+AX.msj,
                    icon: 'error',
                    confirmButtonText: 'Continuar'
                })
                
				}
                
            }
        });
		//}",
   })
});
