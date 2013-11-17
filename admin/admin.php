
<?php
include 'admin-header.php';
?>
<div class="container">

    <div class="row" id="crear_usuario">
        <div class="col-lg-6">
            <h3>Crear usuarios</h3>
            <form class="form-horizontal" action="./lib/createuser.php" method="post">
                <div class="input-group">
                    <input class="form-control" type="text" name="user_name" size="40" placeholder="Usuario">
                </div>
                <div class="input-group">
                    <input class="form-control" type="password" name="password" size="40" placeholder="Password">
                </div>
                <div class="input-group">
                    <input class="form-control" type="password" name="check_password" size="40" placeholder="Repeat Password">
                </div>
                <div class="input-group">
                    <input class="form-control" type="text" name="email" size="40" placeholder="Em@il">
                </div>
                <div class="input-group">
                    <select class="form-control" id="rol" name="rol" class="form-control" >
                        <option value="1">Administrador</option>
                        <option value="2">Editor</option>
                        <option value="3">Usuario</option>
                    </select>
                </div>
                <div class="input-group">
                    <button class="btn btn-default"type="submit">Crear usuario</button>
                </div>
            </form>
        </div>

        <div class="col-lg-6">
            <h3>Lista de Usuarios</h3>
            <form class="form-horizontal" action="./lib/deleteuser.php" method="post">
                <br><input id="all" type="checkbox" name="users"><h4>Todos</h4>
                <?php
                require_once dirname(__DIR__) . '/config.php';
                include './lib/showusers.php';

                showUsers(getUsers(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF));
                ?>
                <div class="input-group">
                    <button class="btn btn-default" type="submit">Eliminar usuarios</button>
                </div>
            </form>
        </div>

    </div>

    <div id="crear_categoria">
        <div class="col-lg-6">
            <h3>Crear categoria</h3>
            <form class="form-horizontal" action="./lib/createcategories.php" method="post">
                <div class="input-group">
                    <input class="form-control" type="text" name="category" size="40" placeholder="Categoria">
                </div>
                <div class="input-group">
                    <button class="btn btn-default"type="submit">Crear categoria</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h3>Lista de Categorias</h3>
            <form class="form-horizontal" action="./lib/delecategory.php" method="post">
                <br><input id="all" type="checkbox" name="categories"><h4>Todas</h4>
                <?php
                require_once dirname(__DIR__) . '/config.php';
                include './lib/showcategories.php';

                showCategories(getCategories(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF));
                ?>
                <div class="input-group">
                    <button class="btn btn-default" type="submit">Eliminar usuarios</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row" id="crear_articulo">
        <div class="col-lg-6">
            <h3>Crear Artículo</h3>
            <form class="form-horizontal" action="./lib/createarticle.php" method="post">
                <div class="input-group">
                    <input class="form-control" type="text" name="titulo" placeholder="Titulo">
                </div>
                <div class="input-group">
                    <textarea class="form-control" cols="40" rows="5" name="articulo" placeholder="Artículo"></textarea>
                </div>
                <div class="input-group">
                    <button class="btn btn-default"type="submit">Crear articulo</button>
                </div>
            </form>
            <form class="form-horizontal" action="./lib/createexamples.php">            
                <div class="input-group">
                    <button class="btn btn-default"type="submit">Crear articulos de prueba</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h3>Lista de Artículos</h3>
            <form class="form-horizontal" action="./lib/deletearticle.php" method="post">
                <br><input id="all" type="checkbox" name="articles"><h4>Todos</h4>
                <?php
                require_once dirname(__DIR__) . '/config.php';
                include './lib/showarticlestitles.php';

                showArticlesTitles(getArticlesTitles(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF));
                ?>
                <div class="input-group">
                    <button class="btn btn-default" type="submit">Eliminar artículos</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'admin-footer.php';
?>

