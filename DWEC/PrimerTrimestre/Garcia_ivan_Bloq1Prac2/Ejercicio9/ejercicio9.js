function abrir(){
  var newVentana = window.open("", "Ventana abierta", "width=200,height=200"); //El titulo tendría que usar el de aquí.
  newVentana.document.write("<input  type='button' value='Cerrar' onclick=window.close()>");
  newVentana.document.title = "Ventana abierta";
}
