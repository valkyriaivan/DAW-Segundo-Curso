var arrayNum = [7, 8, 2, 9, 10]; //Declara array
var total = 0; //Inicializamos total

for (i in arrayNum){ //Bucle
  if (arrayNum[i] > 8){ //Si es mayor de 8
    total += arrayNum[i]; //Suma al total
  }
}
alert("El total de la suma de los números mayores de 8 es: " + total);
