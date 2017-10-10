var input = prompt ("Introduce un número:"); //Pide input
var parImp = input%2; //Calcula resto

if (parImp==0){ //Comprueba si el resto es 0
  alert("El número " + input + " es par.");
}
else if (parImp >= 1){ //Comprueba si el resto es 1 o mayor
  alert("El número " + input + " es impar.");
}
else{ //Si no es número valido
  alert("Introduce un número valido.");
}
