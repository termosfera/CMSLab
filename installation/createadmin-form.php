<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="./../css/createadmin.css">
    </head>
    <body>
        <div id="container">
            <div id="logo">
                <img src="./../images/cms-logo-ico.png">
            </div>
            <p>
                El archivo config.php se ha creado correctamente, ahora
                crea el usuario administrador.
            </p>
            <hr>
            <form id='install-form' action="createadmin.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label>Titulo del sitio Web</label>
                        </td>
                        <td>
                            <input id='title' type="text" name='title' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nombre de usuario</label>
                        </td>
                        <td>
                            <input id='user_name' type="text" name='user_name' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label>
                        </td>
                        <td>
                            <input id='password' type="password" name='password' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Check Password</label>
                        </td>
                        <td>
                            <input id='check-password' type="password" name='check-password' size="30">
                        </td>
                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <input id='email' type="text" name='email' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="button" type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

