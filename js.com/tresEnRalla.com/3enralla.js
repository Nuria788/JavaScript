 
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
        
        //guardamos los datos de la jugada
        divClickado.imagenActual = "cruz"
        divClickado.style["background-image"] = "url('cruz.png')"
        comprobarGanador()

        //cambiamos de turno
        turnoJugador = "jugadorCirculo"
    }
    else{
        
        //guardamos los datos de la jugada
        divClickado.imagenActual = "circulo"
        divClickado.style["background-image"] = "url('circulo.png')"
        comprobarGanador()

        //cambiamos de turno
        turnoJugador = "jugadorCruz"
    }

    
    
}

function comprobarGanador(){
    
    if (div11.imagenActual == "cruz"
    &&  div12.imagenActual == "cruz"
    &&  div13.imagenActual == "cruz" ){
        hayUnGanador()
    }else if(div21.imagenActual == "cruz"
    &&  div22.imagenActual == "cruz"
    &&  div23.imagenActual == "cruz" ){
        hayUnGanador()
    }else if(div31.imagenActual == "cruz"
    &&  div32.imagenActual == "cruz"
    &&  div33.imagenActual == "cruz" ){
        hayUnGanador()
    }
    //----------------------------------//
    else if (div11.imagenActual == "cruz"
    &&  div21.imagenActual == "cruz"
    &&  div31.imagenActual == "cruz" ){
        hayUnGanador()
    }else if (div12.imagenActual == "cruz"
        &&  div22.imagenActual == "cruz"
        &&  div32.imagenActual == "cruz" ){
        hayUnGanador()
    }else if (div13.imagenActual == "cruz"
        &&  div23.imagenActual == "cruz"
        &&  div33.imagenActual == "cruz" ){
        hayUnGanador()
    }
    //----------------------------------//
    else if (div11.imagenActual == "cruz"
    &&  div22.imagenActual == "cruz"
    &&  div33.imagenActual == "cruz" ){
        hayUnGanador()
    }else if(div31.imagenActual == "cruz"
    &&  div22.imagenActual == "cruz"
    &&  div13.imagenActual == "cruz" ){
        hayUnGanador()
    }


    //--------circulo-----------------------
    if (div11.imagenActual == "circulo"
    &&  div12.imagenActual == "circulo"
    &&  div13.imagenActual == "circulo" ){
        hayUnGanador()
    }else if(div21.imagenActual == "circulo"
    &&  div22.imagenActual == "circulo"
    &&  div23.imagenActual == "circulo" ){
        hayUnGanador()
    }else if(div31.imagenActual == "circulo"
    &&  div32.imagenActual == "circulo"
    &&  div33.imagenActual == "circulo" ){
        hayUnGanador()
    }
    //----------------------------------//
    else if (div11.imagenActual == "circulo"
    &&  div21.imagenActual == "circulo"
    &&  div31.imagenActual == "circulo" ){
        hayUnGanador()
    }else if (div12.imagenActual == "circulo"
        &&  div22.imagenActual == "circulo"
        &&  div32.imagenActual == "circulo" ){
        hayUnGanador()
    }else if (div13.imagenActual == "circulo"
        &&  div23.imagenActual == "circulo"
        &&  div33.imagenActual == "circulo" ){
        hayUnGanador()
    }
    //----------------------------------//
    else if (div11.imagenActual == "circulo"
    &&  div22.imagenActual == "circulo"
    &&  div33.imagenActual == "circulo" ){
        hayUnGanador()
    }else if(div31.imagenActual == "circulo"
    &&  div22.imagenActual == "circulo"
    &&  div13.imagenActual == "circulo" ){
        hayUnGanador()
    }

}

function hayUnGanador(){
    var cartel = document.querySelector(".cartelWin")
    cartel.innerHTML = "El "+turnoJugador+" ha ganado!!!"
}
