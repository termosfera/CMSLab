<!DOCTYPE html>
<html>
    <head>
        <title>CMSLab</title>
        <meta charset="utf-8">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <link rel='stylesheet' type='text/css' href='./css/stylesheet.css'>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">CMSLab</a>
            </div>
            <div class="nav nav-tabs">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form navbar-left" role="search" action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search" name="find_article">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </li>
                    <li>
                        <a href="./admin/lib/killsession.php">Logout</a>
                    </li>
                    <li>
                        <a id="login" href="./admin/login-form.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>