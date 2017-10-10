var input = prompt ("Introduce el precio de un articulo:"); //Pide input
input = parseFloat(input); //Conversión de String a Float

var iva = (input*21)/100; //Calcula el iva
var precioFinal = input + iva; //Calcula el precio final
precioFinal = precioFinal.toFixed(2); //Fija el a dos decimales

alert("El 21% de IVA de " + input + " es: " + iva + "\nEl precio final del producto es: " + precioFinal);
