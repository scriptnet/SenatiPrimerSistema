var tabla;

//funcion

function init(){

	MostrarFormulario(false);
	ListarFormulario();
}
//limpiar tabla
function limpiar(){
    $("#idcategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
}
//m tabla
	function MostrarFormulario(flag){
	  limpiar();
		if (flag) {
		    $("#ListadoRegistro").hide();
		    $("#FormularioRegistro").show();
		    $("#BtnGuardar").prop("disable", true);
		} else {
		     $("#ListadoRegistro").show();
		    $("#FormularioRegistro").hide();
        }
    }
	function CancelarFormulario(){
		limpiar();
		MostrarFormulario(false);

	}
	function ListarFormulario(){

		 tabla = $('#tbllistado').DataTable({

			"aProcessing":true, //activar el procesador de datatable
			"aServedSide":true, //activar la paginacion y el filtrado por el servidor
			dom:"Bfrtip",

			 buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		

			"ajax" : {
				URL:"../ajax/categoria.php?op=listar",
					type:"get",
					dataType:"json",
					error: function(e){
						console.log(e.responseText);
					}
			},

					
					
			"bDisplay":true,
			"iDisplayLenght":5, //paginacion
			"order": [[0,"desc"]]

		}).DataTable();
    }

init();
