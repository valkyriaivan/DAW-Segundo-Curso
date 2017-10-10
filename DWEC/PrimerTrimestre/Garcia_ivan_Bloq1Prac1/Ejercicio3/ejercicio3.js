var input = prompt ("Introduce un mes:"); //Pide input
var estacion = "" //Inicializa estación.

input = input.toLowerCase(); //Convierte string a minuscula
/*Comprueba si el mes introducido está en alguno de los if,
si no está, muestra mensaje de error. */
if((input == "enero") || (input == "diciembre") || (input == "febrero")){
  estacion = "Invierno";
}
else if((input == "marzo") || (input == "abril") || (input == "mayo")){
  estacion = "Primavera";
}
else if((input == "junio") || (input == "julio") || (input == "agosto")){
  estacion = "Verano";
}
else if((input == "septiembre") || (input == "octubre") || (input == "noviembre")){
  estacion = "Otoño";
}
else{
  alert("Introduce un nombre de mes correcto.");
}
alert("Estamos en " + estacion + "."); //Muestra la estación.
