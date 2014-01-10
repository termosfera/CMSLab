<?php
session_start();
if (isset($_SESSION['usuario']) === 'admin' && isset($_SESSION['acceso']) === 1) {
    header('location:./admin.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CMSLab</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./../css/login-form.css">
        <script type="text/javascript" src="./../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="logo">
                <img src="./../images/cms-logo-ico.png">
            </div>
            <form class="form-horizontal" action="login.php" method="post">
                <div class="input-group">
                    <input class="form-control" type="text" name="user_name" placeholder="Usuario">
                </div>
                <div class="input-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <input id="checkbox" type="checkbox"> Remember me
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </form>
        </div>
    </body>
</html>

