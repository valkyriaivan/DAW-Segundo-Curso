function afegir(){
  var parrafo = document.createElement("p");
  var texto = document.createTextNode("Párrafo añadido.");
  parrafo.appendChild(texto);
  document.getElementById("parrafos").appendChild(parrafo);
}
function insertar(){
  var parrafo = document.createElement("p");
  var texto = document.createTextNode("Párrafo insertado.");
  parrafo.appendChild(texto);

  var segundoP = document.getElementById("parrafos").getElementsByTagName("p")[1];
  document.getElementById("parrafos").insertBefore(parrafo,segundoP);
}
function reemplazar(){
  var parrafo = document.createElement("p");
  var texto = document.createTextNode("Párrafo reemplazado.");
  parrafo.appendChild(texto);

  var segundoP = document.getElementById("parrafos").getElementsByTagName("p")[1];
  document.getElementById("parrafos").replaceChild(parrafo, segundoP);
}
function borrar(){
  var eliminarP = document.getElementById("parrafos").getElementsByTagName("p")[1];
  document.getElementById("parrafos").removeChild(eliminarP);
}
function clonar(){
  var clon = document.getElementById('parrafos').cloneNode("p");
  document.getElementById("parrafos").parentNode.insertBefore(clon,document.getElementById('parrafos'));
}
