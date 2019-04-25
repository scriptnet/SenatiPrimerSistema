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
	var as = "listar";
	function ListarFormulario(){
		console.log("s");
		var tabla = $('#tbllistado').DataTable({

			"aProcessing":true, //activar el procesador de datatable
			"aServedSide":true, //activar la paginacion y el filtrado por el servidor
			"dom": 'lrtip',

			 buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		

			"ajax" : {
				
					url: "../ajax/categoria.php?op="+as,
					type: "GET",
					dataType: "json",
					dataSrc: 'aData',
					
					error: function(e){
						console.log(e.responseText);
					}
					
			},

					
					
			"bDisplay":true,
			"iDisplayLenght":5, //paginacion
			"order": [[0,"desc"]]

		} );
    }

init();
