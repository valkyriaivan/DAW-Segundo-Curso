function mostrarFecha() {
  var dias = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
  var mes = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
  var f=new Date();

  document.write(dias[f.getDay()] + ", " + f.getDate() + " de " + mes[f.getMonth()] + " de " + f.getFullYear());
}
