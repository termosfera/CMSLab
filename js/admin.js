window.onload = function() {
    // gestiona pestañas en panel de administración
    document.getElementById("crear_usuario").style.display = "block";
    document.getElementById("crear_categoria").style.display = "none";
    document.getElementById("crear_articulo").style.display = "none";

    // gestiona checkbox de users
    var all_users_checkbox = document.getElementById('all');
    all_users_checkbox.onchange = check_uncheck;
};

/**
 * Muestra y oculta contenido de cada pestaña.
 * 
 * @param string id
 * @returns {undefined}
 */
function mostrarContenido(id) {
    var t1 = document.getElementById("crear_usuario");
    var t2 = document.getElementById("crear_categoria");
    var t3 = document.getElementById("crear_articulo");
    var n = 0;
    var elements = [t1, t2, t3];

    switch (id) {
        case "tab1":
            n = 0;
            break;
        case "tab2":
            n = 1;
            break;
        case "tab3":
            n = 2;
            break;
    }

    for (var i = 0; i < elements.length; i++) {
        if (i === n)
            elements[i].style.display = "block";
        else
            elements[i].style.display = "none";
    }
}

/**
 * Marca y desmarca checkbox de usuarios seleccionados para
 * ser eliminados.
 * 
 * @returns {undefined}
 */
function check_uncheck() {
    var users_checkboxes = document.getElementsByClassName('selected');
    
    if (this.checked) {
        for (checkbox in users_checkboxes) {
            users_checkboxes[checkbox].checked = true;
        }
    } else {
        for (checkbox in users_checkboxes) {
            users_checkboxes[checkbox].checked = false;
        }
    }
}
