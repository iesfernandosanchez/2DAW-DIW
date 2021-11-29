window.addEventListener("DOMContentLoaded", function () {
    window.requestAnimationFrame(draw_HMS)
})

function draw_arc() {// Dibuja el dial

    var pi = Math.PI

    var Tools = document.getElementById("Canvas").getContext("2d")

    Tools.save()
    Tools.translate(250, 250)
    Tools.beginPath()
    Tools.arc(0, 0, 155, 0, pi * 2, true)
    Tools.lineWidth = 5
    Tools.strokestyle = "bisque"
    Tools.closePath()
    Tools.stroke()
    Tools.restore()


    Tools.save()
    Tools.translate(250, 250)
    Tools.beginPath()
    Tools.arc(0, 0, 5, 0, pi * 2, true)
    Tools.fill()
    Tools.closePath()
    Tools.restore()

    for (var i = 1; i <= 60; i++) {

        Tools.save()

        Tools.translate(250, 250)
        Tools.rotate(-pi / 2 + (pi / 180) * (360 / 60) * i)
        Tools.beginPath()

        if (i % 5 === 0) {
            Tools.moveTo(114, 0)
            Tools.strokeStyle = "crimson"
            Tools.lineWidth = 5
        } else {
            Tools.moveTo(120, 0)
            Tools.strokeStyle = "aqua"
            Tools.linewidth = 3
        }

        Tools.lineTo(150, 0)
        Tools.closePath()
        Tools.stroke()
        Tools.restore()
    }
}

function draw_HMS() { // Calcula el sistema de horas, minutos, segundos y radianes y establece los atributos

    window.setTimeout(function () {
        window.requestAnimationFrame(draw_HMS)
    }, 1000 / 5)
    clear()
    draw_arc()
    var pi = Math.PI
    var dat = new Date()

    var hours = dat.getHours() // Obtener horas
    var minutes = dat.getMinutes() // obtener minutos
    var segundos = dat.getSeconds() // obtener segundos

    var segundos_angle = pi / 180 * (360 / 60) * segundos
    var minutes_angle = pi / 180 * (360 / 60) * minutes + segundos_angle / 60
    var hours_angle = pi / 180 * (360 / 12) * hours * minutes_angle / 12

    var seconds_length = 108 // Establecer la longitud del puntero
    var minutes_length = 90
    var hours_length = 62

    var seconds_width = 2
    var minutes_width = 3
    var hours_width = 4

    var segundos_color = "rojo" // Establecer el color del puntero
    var minutes_color = "green"
    var hours_color = "darkred"

    var seconds_size = 25
    var minutes_size = 15
    var hours_size = 10

    draw_h_m_s(segundos_angle, seconds_length, seconds_width, segundos_color, seconds_size, pi)
    draw_h_m_s(minutes_angle, minutes_length, minutes_width, minutes_color, minutes_size, pi)
    draw_h_m_s(hours_angle, hours_length, hours_width, hours_color, hours_size, pi)
}

function draw_h_m_s(angle, longitud, ancho, color, size, pi) {
    var Tools = document.getElementById("Canvas").getContext("2d")

    Tools.save()
    Tools.translate(250, 250) // Mueve el origen de cada puntero de dibujo a (250,250)
    Tools.rotate(-pi / 2 + angle)
    Tools.lineWidth = ancho
    Tools.beginPath()
    Tools.moveTo(-size, 0)
    Tools.lineTo(longitud, 0)
    Tools.strokeStyle = color
    Tools.stroke()
    Tools.closePath()
    Tools.restore()
}

function clear() {

    var Tools = document.getElementById("Canvas")
    console.log("2")
    var ss = Tools.getContext("2d")
    ss.clearRect(0, 0, 500, 500)
}