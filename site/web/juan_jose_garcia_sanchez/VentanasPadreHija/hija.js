function getRespuesta(nombre) {
    if (nombre) {
        if (window.opener) {
            var productos = window.opener.getProductos()
            var respuesta = []

            productos.forEach(value => {
                if (value.indexOf(nombre) !== -1) {
                    respuesta.push(value)
                }
            })

            var html = ""
            for (let i = 0; i < respuesta.length; i++) {
                html += "<input type='checkbox' name='checkbox' onchange='checkear(" + respuesta[i] + ",this.checked)' id='" + respuesta[i] + "'><label for='" + respuesta[i] + "'>" + respuesta[i] + "</label></br>"
            }
            document.getElementById("checkboxesRespuesta").innerHTML = html;
        }
    }else {
        document.getElementById("checkboxesRespuesta").innerHTML = "";

    }
}

function checkear(idCheckbox, checked) {
    if (window.opener) {
        window.opener.checkearPadre(idCheckbox.id, checked)
    }

}

function limpiarAllCheckBoxes() {
    if (window.opener) {
        document.getElementsByName("checkbox").forEach(value => value.checked = false)
        window.opener.limpiarCheckboxes()
    }
}
