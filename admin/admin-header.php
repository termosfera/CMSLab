<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once './lib/checkuser.php';
            checkAdminUser();
        ?>
        <title>CMS</title>
        <meta charset="utf-8">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./../css/bootstrap.min.css">
        <link rel='stylesheet' type='text/css' href='./../css/admin.css'>
        <script type="text/javascript" src="./../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./../js/admin.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">            
            <div class="navbar-header">
                <a href="#" class="navbar-brand">CMSLab Panel de administración</a>
            </div>            
            <div class="nav nav-tabs">                
                <ul class="nav navbar-nav">
                    <li id="tab1" onclick="mostrarContenido(this.id)">
                        <a href="#">Crear nuevo usuario</a>
                    </li>
                    <li id="tab2" onclick="mostrarContenido(this.id)">
                        <a href="#">Crear categoria</a>
                    </li>
                    <li id="tab3" onclick="mostrarContenido(this.id)">
                        <a href="#">Crear artículo</a>
                    </li>
                </ul>                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Main</a>
                    </li>
                    <li>
                        <a href="./lib/killsession.php">Logout</a>
                    </li>
                </ul>                
            </div>            
        </nav>


