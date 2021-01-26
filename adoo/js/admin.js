$(document).ready(function(){
  $('.fixed-action-btn').floatingActionButton();
  $('.tooltipped').tooltip();
  
  $(".ver").click(function(){
    let alumno = $(this).attr("data-alumno");
	window.location.href = "../php/editar.php?alumno="+alumno;
    
  });

  $(".eliminar").click(function(){
	  let alumnoD =$(this).attr("data-alumno");
		console.log(alumnoD);
	   $.ajax({
            method:"POST", 
            url:"http://localhost/rock_lml/php/delete.php", 
            data: {alumnoD:alumnoD},
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
				}if(AX.cod == 0){
					let promise = Swal.fire({
                    title: '¡Upps!',
                    text: 'Mensaje:'+AX.msj,
                    icon: 'error',
                    confirmButtonText: 'Continuar'
                })
                promise.then((successMessage)=>{
                    $(location).attr('href','../php/administrador.php')
					})
				}
                
            }
        });
  });
});
