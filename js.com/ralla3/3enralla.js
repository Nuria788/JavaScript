 
var turnoJugador = "jugadorCirculo"


var div11 = document.querySelector(".x1y1")
var div12 = document.querySelector(".x1y2")
var div13 = document.querySelector(".x1y3")
var div21 = document.querySelector(".x2y1")
var div22 = document.querySelector(".x2y2")
var div23 = document.querySelector(".x2y3")
var div31 = document.querySelector(".x3y1")
var div32 = document.querySelector(".x3y2")
var div33 = document.querySelector(".x3y3")


function cuandoHacesClick(divClickado){
    //divClickado.innerHTML = "kk"

    
    
    if (turnoJugador == "jugadorCruz"){
        
        divClickado.imagenActual = "cruz"
        divClickado.style["background-image"] = "url('cruz.png')"

        turnoJugador = "jugadorCirculo"
    }
    else{
        
        divClickado.imagenActual = "circulo"
        divClickado.style["background-image"] = "url('circulo.png')"

        turnoJugador = "jugadorCruz"
    }

    comprobarGanador()
    
}

function comprobarGanador(){
    
    if (div11.imagenActual == "cruz"
    &&  div12.imagenActual == "cruz"
    &&  div13.imagenActual == "cruz" ){
        document.write("WIN")
    }else if(){
        
    }

}
