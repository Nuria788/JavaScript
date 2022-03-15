

function cuandoHacesClick(divClickado){
    //divClickado.innerHTML = "kk"

    if (divClickado.imagenActual == "circulo"){
        divClickado.imagenActual = "cruz"
        divClickado.style["background-image"] = "url('cruz.png')"
    }
    else{
        divClickado.imagenActual = "circulo"
        divClickado.style["background-image"] = "url('circulo.png')"
    }

        

    

    
}