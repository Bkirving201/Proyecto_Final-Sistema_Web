function mostrar(){
    
    var x = document.getElementById('tabla')
    var r = document.getElementById('img-flecha')

    if (x.style.display === 'none' && r.style.transform === 'rotate(0deg)'){
        x.style.display = 'flex'
        r.style.transform = 'rotate(90deg)'

    }
    else{
        x.style.display = 'none'
        r.style.transform = 'rotate(0deg)'
    }
    

}

function alerta(){
    alert("coneccion estable");
}