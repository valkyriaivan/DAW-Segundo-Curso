var contador = 0;
var total = 0;

for (i = 0; i < 5; i++){ //Bucle
  var input = prompt ("Introduce un número");
  input = parseInt(input); //Conversión de String a Int
  if (input >= 100){
    contador++ //Incrementa contador
  }
  total += input; //Calcula el total
}
alert("Hay " + contador + " números mayores de 100.\n" + "El total de la suma es: " + total);
