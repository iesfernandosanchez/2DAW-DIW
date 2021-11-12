var productos = ["Tomates", "Tomatina", "Lechuga", "Esparragos","Manzana"]

document.addEventListener("DOMContentLoaded", function () {
    rellenarCheckBoxes()
})

function rellenarCheckBoxes() {
    var html = ""
    for (let i = 0; i < productos.length; i++) {
        html += "<input type='checkbox' name='checkbox' id='" + productos[i] + "'><label for='" + productos[i] + "'>" + productos[i] + "</label></br>"
    }
    document.getElementById("checkboxes").innerHTML = html;
}

function abrirVentanaHija() {
    window.open("ventana.html", "", "height=400,width=800")
}

function getProductos() {
    return productos
}

function checkearPadre(idCheckbox, checked) {
    document.getElementById(idCheckbox).checked = checked
}

function limpiarCheckboxes() {
    document.getElementsByName("checkbox").forEach(value => value.checked = false)
}