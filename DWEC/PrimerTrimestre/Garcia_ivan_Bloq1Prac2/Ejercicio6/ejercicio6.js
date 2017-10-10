var f=new Date();
var saludo = ""
function mostrarHora() {
  var hora = f.getHours(); //Guarda las horas
  var minutos = f.getMinutes(); //Guarda los minutos
  //Comprueba en que intervalo de horas está.
  if ((hora >= 8) && (hora < 14)){
    saludo = "Buenos días";
  }
  else if ((hora >= 14) && (hora <= 20)){
    saludo = "Buenas tardes";
  }
  else{
    saludo = "Buenas noches";
  }
  //Formatea bien los minutos. GetMinutes no devuelve los minutos menores de 10 con un 0 delante.
  if (minutos < 10){
    minutos = "0" + minutos;
  }
  if (hora < 10){
    hora = "0" + hora;
  }
  document.write(saludo + "," + " son las " + hora + ":" + minutos + " horas.");
}
