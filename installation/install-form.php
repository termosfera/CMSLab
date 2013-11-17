<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="./../css/install-form.css">
        <script type='text/javascript' src='./../js/install-validation.js'></script>
        <title></title>
    </head>
    <body>
        <div id="container">
            <div id="logo">
                <img src="./../images/cms-logo-ico.png">
            </div>
            <p>Oooops! Parece que no cuentas con un archivo config.php. 
                Rellena el formulario para crearlo.</p>
            <form id="install-form" action="install.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label>Host</label>
                        </td>
                        <td>
                            <input id='host' type="text" name='host' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>DB Name</label>
                        </td>
                        <td>
                            <input id='name' type="text" name='name' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>User</label>
                        </td>
                        <td>
                            <input id='user' type="text" name='user' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label>
                        </td>
                        <td>
                            <input id='password' type="password" name='pass' size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Check Password</label>
                        </td>
                        <td>
                            <input id='check-password' type="password" name='check-pass' size="30">
                        </td>
                    <tr>
                        <td>
                            <label>Prefix</label>
                        </td>
                        <td>
                            <input id='prefix' type="text" name='pref' value='lc_' size="30">
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

