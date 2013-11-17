/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload = function() {
    var formulario = document.getElementById("install-form");

    formulario.onsubmit = function() {
        var val = validation();

        if (!val) {
            alert("Alguno de los campos no se ha rellenado correctamente");
        } else {
            alert("Formulario completado correctamente, información enviada");
        }

        return val;
    };
};

function validation() {
    var regexPattern = /\s+|\'+|\"+/;
    var result = true;

    var dbHost = document.getElementById("host").value;
    var dbName = document.getElementById("name").value;
    var dbUser = document.getElementById("user").value;
    var dbPass = document.getElementById("password").value;
    var dbCheckPass = document.getElementById("check-password").value;
    var dbPrefix = document.getElementById("prefix").value;

    console.log(dbHost, dbName, dbPass, dbCheckPass, dbUser);

    if (dbHost === null || dbHost.length === 0 || regexPattern.test(dbHost)) {
        result = false;
    } else if (dbName === null || dbName.length === 0 || regexPattern.test(dbName)) {
        result = false;
    } else if (dbPass === null || dbPass.length === 0 || regexPattern.test(dbPass)) {
        result = false;
    } else if (dbCheckPass === null || dbCheckPass.length === 0 ||
            regexPattern.test(dbCheckPass) || dbCheckPass !== dbPass) {
        result = false;
    } else if (dbPrefix === null || dbPrefix.length === 0 || regexPattern.test(dbPrefix)) {
        result = false;
    } else if (dbUser === null || dbUser.length === 0 || regexPattern.test(dbUser)) {
        result = false;
    }

    return result;
}

