var input = prompt ("Introduce un mes:"); //Pide input
var estacion = ""; //Inicializa estación.
input = input.toLowerCase(); //Convierte string a minuscula

function calcularEst(input) {

  switch(input){
    case "diciembre": case "enero": case "febrero":
      estacion = "Invierno";
      break;
    case "marzo": case "abril": case "marzo":
      estacion = "Primavera";
      break;
    case "junio": case "julio": case "agosto":
      estacion = "Verano";
      break;
    case "Septiembre": case "Octubre": case "Noviembre":
      estacion = "Otoño";
      break;
    default:
      alert("Introduce un nombre de mes correcto.");
      break;
  }
  if (estacion != ""){
    alert("Estamos en " + estacion + "."); //Muestra la estación.
  }
}

calcularEst(input);
