var input = prompt ("Introduce una frase:"); //Pide frase
var palabrasOrd = input.split(" "); //Separa la frase en un array

document.write("La longitud de la cadena es de " + input.length + " caracteres. <br>"); //MUestra cantidad caracteres
document.write("La cadena en mayúsculas es " + input.toUpperCase() + "<br>"); //Muestra frase en mayúscula
document.write("La cadena en mayúsculas es " + input.toLowerCase() + "<br>"); //Muestra frase en minuscula
document.write("CADENA NORMAL <br>")
for (i in palabrasOrd){ //Recorre el array
  document.write(palabrasOrd[i] + "<br>");
}
palabrasDes=palabrasOrd.reverse(); //Invierte el array
document.write("CADENA AL REVÉS <br>")
for (i in palabrasDes){ //Recorre el array
  document.write(palabrasDes[i] + "<br>");
}
