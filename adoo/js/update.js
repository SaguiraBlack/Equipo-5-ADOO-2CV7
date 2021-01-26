$(document).ready(function(){  
	
   $("#inicio").submit(function(e){
        e.preventDefault();
        var formulario = $("#inicio").serialize();
        console.log(formulario);
        $.ajax({
            method:"POST", 
            url:"http://localhost/rock_lml/php/update.php", 
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
                promise.then((successMessage)=>{
                    $(location).attr('href','../php/administrador.php')   
                })
				}else if(AX.cod == 0){
					let promise = Swal.fire({
                    title: '¡Upps!',
                    text: AX.msj,
                    icon: 'error',
                    confirmButtonText: 'Continuar'
                })
                promise.then((successMessage)=>{
                    $(location).attr('href','../php/administrador.php')
					})
				}
                
            }
        });
		//}",
   })
});
