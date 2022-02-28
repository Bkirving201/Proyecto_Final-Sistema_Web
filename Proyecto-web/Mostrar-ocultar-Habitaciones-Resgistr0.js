function mostrarhabitacion(){
    var x = document.getElementById('oculto-habitaciones');
    var y = document.getElementById('contenido-cuerpo');

    if (x.style.display === "none" && y.style.height === "727px"){
        x.style.display = "block";
        y.style.height = "1050px";

    }
    else{
        x.style.display = "none";
        y.style.height = "727px";
    }
}