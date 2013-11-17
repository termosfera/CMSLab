<?php
include './../installation/config.php';

echo DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF;

login(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF);

function login($db_host, $db_user, $db_pass, $db_name, $db_prefix) {

    // Datos introducidos en el formulario
    //$introducedUser = filter_input(INPUT_POST, 'user_name');
    //$introducedPass = filter_input(INPUT_POST, 'password');
    
    $introducedUser = 'user';
    echo $introducedUser;
    $introducedPass = 'user';
    $hashedIntroducedPass = md5($introducedPass);
    echo $hashedIntroducedPass;
    
    // Datos a comparar
    $user;
    $pass;

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // comprobar la conexión
    if ($conn->connect_error) {
        echo "Error en la conexión";
        exit();
    } else {
        echo "connected";
    }

    $consulta = "SELECT * FROM {$db_prefix}user WHERE username='" . $introducedUser . "';";
    echo "<br>" . $consulta;
    $result = $conn->query($consulta);
    
    if ($result) {

        while ($row = $result->fetch_row()) {
            $user = $row[1];
            $pass = $row[2];
        }

        // liberar el conjunto de resultados
        $result->close();
    }

    // cerrar la conexión
    $conn->close();
/*
    if (!strcmp($introducedUser, $user) && !strcmp($hashedIntroducedPass, $pass)) {
        session_start();
        $_SESSION['acceso'] = 1;
        header('location:admin.php');
        exit();
    } else {
        header('location:login.html');
        exit();
    }
    */
    echo $user;
    echo $pass;
}

?>

