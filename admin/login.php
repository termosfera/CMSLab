<?php
require(dirname(__DIR__) . '/config.php');

login(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF);

function login($db_host, $db_user, $db_pass, $db_name, $db_prefix) {

    // Datos introducidos en el formulario
    $introducedUser = filter_input(INPUT_POST, 'user_name');
    $introducedPass = filter_input(INPUT_POST, 'password');
    $hashedIntroducedPass = md5($introducedPass);

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $consulta = "SELECT * FROM {$db_prefix}user WHERE username='" . $introducedUser . "';";
    $result = $conn->query($consulta);

    if ($result) {
        while ($row = $result->fetch_row()) {
            $user = $row[1];
            $pass = $row[2];
        }

        $result->close();
    }

    $conn->close();

    if (!strcmp($introducedUser, $user) && !strcmp($hashedIntroducedPass, $pass)) {
        session_start();
        $_SESSION['usuario'] = 'admin';
        $_SESSION['acceso'] = 1;
        header('location:./admin.php');
        exit();
    } else {
        header('location:./login-error.php');
        exit();
    }
}

?>