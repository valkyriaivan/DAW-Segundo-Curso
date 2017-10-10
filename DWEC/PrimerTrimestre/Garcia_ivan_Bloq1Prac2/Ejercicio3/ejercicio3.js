document.write("<h1>Bienvenido a mi página</h1>");
document.write("Tu Navegador es: " + navigator.userAgent + "<br>");
var continuar = confirm("Deseas continuar?");

if (continuar == true){
  alert("Continuemos...");
}
