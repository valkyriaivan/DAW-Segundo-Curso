var userBrow = navigator.userAgent;
if (userBrow.indexOf("Explorer") != -1){
  window.resizeTo(500, 500);
}
else{
  document.write("No está permitido el resize en este navegador.<br> Utiliza Internet explorer para que funcione.");
}
