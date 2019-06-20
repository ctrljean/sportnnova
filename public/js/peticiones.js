function ajax() {
    document.getElementById("btnregister").addEventListener("click", function (event) {
        event.preventDefault()
    });

    var nombre = document.getElementById('nombre').value;
    var documento = document.getElementById('documento').value;
    var password = document.getElementById('password').value;
    var birth_date = document.getElementById('birth_date').value;
    var sports = document.getElementById('sports').value;
    var position = document.getElementById('position').value;

    // De esta forma se obtiene la instancia del objeto XMLHttpRequest
    if (window.XMLHttpRequest) {
        connection = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        connection = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // Preparando la función de respuesta
    connection.onreadystatechange = response;

    // Realizando la petición HTTP con método POST
    connection.open('POST', 'http://localhost/sportnnova/login/user_registration');
    connection.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    connection.send("complete_name=" + nombre + "&document_number=" + documento + "&password=" + password + "&birth_date=" + birth_date + "&sports=" + sports + "&position=" + position);

    var nombre = document.getElementById('nombre').value = '';
    var documento = document.getElementById('documento').value = '';
    var password = document.getElementById('password').value = '';
    var birth_date = document.getElementById('birth_date').value = '';
    var sports = document.getElementById('sports').value = '1';
    var position = document.getElementById('position').value = '1';
}

function response() {
    if (connection.readyState == 4) {
        console.log("respuesta");
        console.log(connection.responseText);
    }
}

ajax();