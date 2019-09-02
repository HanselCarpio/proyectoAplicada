$(document).ready( function () {
    $('#tabla').DataTable();
} );

//seccion de validaciones
function validacion() {
//    valor = document.getElementById("usuario").value;
//    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
//      alert('[ERROR] El campo debe tener un valor de...');
//      boton = document.getElementById("Iniciarsesion").value;
//      boton.onclick = 'none';
//      
//        return false;
//      
//    }
}

function agregarArticuloCombo(id,nombre,precio,descripcion,imagen,categoria){
  var s = " ";
  var tupla=nombre+s+precio+s+descripcion+s+imagen+s+categoria;
  var txt2 = $('<h4 id="quitar" onclick="quitarElemento(\'quitar\')"></h4>').text(tupla);
  var txt3 ='<input id="Articulo" name="Articulo" value="'+id+'"  type="hidden"/>';
  $("#quitar").replaceWith( txt2 );
  $("#agregados").append(txt3);
}
function ConfirmarArticuloenCombo(){
    var tupla = 'Se agrego el articulo';
    var txt2 = $('<h4 id="quitar" onclick="quitarElemento(\'quitar\')"></h4>').text(tupla);
    $("#quitar").replaceWith( txt2 );
}
function quitarElemento(id){
    $("#"+id).remove();
}

function valueChecks(id) {
    var g = document.getElementById(id);
    if (g.value==1){
        g.value=0;
    }
    if (g.value==0){
        g.value=1;
    }
             
}

function MostrarOwnerForms(path, categorias) {
    
    
    $.ajax({
    type: "GET",
    url: path,
    success: function(datos) {
        $("#divforms").html(datos);
    }
        
})
}


function MostrarOwnerForms(path) {
    
    
    $.ajax({
    type: "GET",
    url: path,
    success: function(datos) {
        $("#divforms").html(datos);
    }
       
})
}

//function cargarleccion(nombre){
//alert("se ejecuto la funcion");
//$.ajax({
//    type: "GET",
//    url: "contenido/"+nombre+".html", 
//    data: "",
//    datatype: "html",
//    success: function(datahtml){
//    $("#contentlesson").html(datahtml);
//    },
//
//error:  function(){
//    $("#contentlesson").html("<p>error al cargar desde Ajax</p>")
//}
//
//});
//}