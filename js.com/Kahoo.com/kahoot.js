
//creo un array donde guardar todas las preguntas y respuestas:
//las preguntas y repuestas las guardo en forma de tabla
var contenidoKahoot = [

    //datos de la primera pregunta
    {   pregunta: "¿Qué lenguajes se ejecutan en el lado del servidor?", 
        res1: "PHP y HTML", 
        res2: "PHP, HTML y CSS", 
        res3: "Javascript, PHP y HTML", 
        res4: "Ninguna de las respuestas anteriores es cierta", 
        resBuena: "PHP y HTML" 
    },

    //datos de la segunda pregunta
    {   pregunta: "¿Qué lenguajes se ejecutan en el lado del cliente?", 
        res1: "PHP", 
        res2: "PHP, HTML y CSS", 
        res3: "Javascript, HTML y CSS", 
        res4: "Ninguna de las respuestas anteriores es cierta", 
        resBuena: "Javascript, HTML y CSS" 
    },

    //datos de la tercera pregunta
    {   pregunta: "¿Qué lenguajes son lenguajes de programación?",  
        res1: "PHP,HTML y javascript", 
        res2: "PHP, HTML y CSS", 
        res3: "Javascript", 
        res4: "Javascript y PHP", 
        resBuena: "Javascript y PHP" 
    }
]

//guardo una referencia a todos los objetos (etiquetas del html) 
//que quiero modificar o tener acceso

var textoPregunta = document.querySelector(".texto")

var puntAcierto = document.querySelector(".acierto")
var puntFallo = document.querySelector(".fallo")

var textoRespuesta1 = document.querySelector(".res1")
var textoRespuesta2 = document.querySelector(".res2")
var textoRespuesta3 = document.querySelector(".res3")
var textoRespuesta4 = document.querySelector(".res4")


//creo una funcion para cargar todos los textos
function cargarTextos(numPregunta){
    textoPregunta.innerHTML = contenidoKahoot[numPregunta].pregunta
    textoRespuesta1.innerHTML = contenidoKahoot[numPregunta].res1
    textoRespuesta2.innerHTML = contenidoKahoot[numPregunta].res2
    textoRespuesta3.innerHTML = contenidoKahoot[numPregunta].res3
    textoRespuesta4.innerHTML = contenidoKahoot[numPregunta].res4
}

//cargo los textos de la primera pregunta
cargarTextos(0)

//almaceno en una variable el numero de la pregunta actual
var numPreguntaActual = 0


//creo la funcion que se activa cuando clicamos la pregunta
function clickRespuesta(elementoClickado){

    //primero compruebo si la respuesta es correcta
    var respuestaSeleccionada = elementoClickado.innerHTML
    var respuestaCorrecta = contenidoKahoot[numPreguntaActual].resBuena

    //si la respuesta seleccionada y la respuesta buena coinciden
    if (respuestaCorrecta == respuestaSeleccionada){
        //el jugador ha acertado
        puntAcierto.innerHTML = Number(puntAcierto.innerHTML) + 1

    //si no, el jugador ha fallado
    }else{
        puntFallo.innerHTML = Number(puntFallo.innerHTML) + 1
    }

    //cargo la siguiente pregunta
    numPreguntaActual ++
    cargarTextos(numPreguntaActual)
}