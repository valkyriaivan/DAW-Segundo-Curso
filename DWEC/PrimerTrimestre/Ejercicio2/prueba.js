var contador = 0;
var total = 0;
for (i = 0; i < 5; i++){
  var input = prompt ("Introduce un número");
  input = parseInt(input);
  if (input >= 100){
    contador++
  }
  total += input;
}
alert("Hay " + contador + " números mayores de 100.\n" + "El total de la suma es: " + total);
