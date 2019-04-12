var tabla;

//funcion

function init(){

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
    
}
}



init();