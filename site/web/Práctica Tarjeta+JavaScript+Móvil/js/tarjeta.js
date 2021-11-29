document.addEventListener("DOMContentLoaded", function(event) {
    cargarDatos();
});

function cargarDatos() {

    var jugador = [];
    var datos = [];

    jugador["nombre"] = "Mikel Oyarzabal";
    jugador["foto"] = "img/foto.jpeg";
    jugador["escudo"] = "img/escudo.png";
    
    datos["edad"] = "24";
    datos["altura"] = "1,81";
    datos["peso"] = "78";
    datos["goles"] = "6";
    datos["asistencias"] = "1";
    datos["puntuacion"] = "8.07";
    jugador["datos"] = datos;

    jugador["descripcion"] = "Mikel Oyarzabal es segunda punta de la Real Sociedad. Su número es el 10 y proviene de Éibar, Gipuzkoa.";


    document.getElementById("nombre").innerHTML = jugador["nombre"];
    document.getElementById("foto").src = jugador["foto"];
    document.getElementById("escudo").src = jugador["escudo"];
    document.getElementById("edad").innerHTML = jugador["datos"]["edad"];
    document.getElementById("altura").innerHTML = jugador["datos"]["altura"];
    document.getElementById("peso").innerHTML = jugador["datos"]["peso"];
    document.getElementById("goles").innerHTML = jugador["datos"]["goles"];
    document.getElementById("asistencias").innerHTML = jugador["datos"]["asistencias"];
    document.getElementById("puntuacion").innerHTML = jugador["datos"]["puntuacion"];
    document.getElementById("descripcion").innerHTML = jugador["descripcion"];

    /*
    var jugador = {};

    jugador.nombre = "Mikel Oyarzabal";
    jugador.foto = "img/foto.jpeg";
    jugador.escudo = "img/escudo.jpeg";
    jugador.edad = "24";
    jugador.altura = "1,81";
    jugador.peso = "78";
    jugador.goles = "6";
    jugador.asistencias = "1";
    jugador.puntuacion = "8.07";
    jugador.descripcion = "Mikel Oyarzabal es segunda punta de la Real Sociedad. Su número es el 10 y proviene de Éibar, Gipuzkoa.";

    document.getElementById("nombre").innerHTML = jugador.nombre;
    document.getElementById("foto").src = jugador.foto;
    document.getElementById("escudo").src = jugador.foto;
    document.getElementById("edad").innerHTML = jugador.edad;
    document.getElementById("altura").innerHTML = jugador.altura;
    document.getElementById("peso").innerHTML = jugador.peso;
    document.getElementById("goles").innerHTML = jugador.goles;
    document.getElementById("asistencias").innerHTML = jugador.asistencias;
    document.getElementById("puntuacion").innerHTML = jugador.puntuacion;
    document.getElementById("descripcion").innerHTML = jugador.descripcion;
    */
}