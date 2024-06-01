<!-- mod_menufluid.php -->
<link rel="stylesheet" href="mod_menufluid/styles_menufluid.css?<?php echo filemtime('mod_menufluid/styles_menufluid.css'); ?>">
<link rel="stylesheet" href="mod_menufluid/bootstrap.min.css?<?php echo filemtime('mod_menufluid/bootstrap.min.css'); ?>">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" data-modulo="mod1/mod1.php">Módulo 1</a></li>
                <li><a href="#" data-modulo="mod2/mod2.php">Módulo 2</a></li>
                <li><a href="#" data-modulo="mod3/mod3.php">Módulo 3</a></li>
                <li><a href="#" data-modulo="mod4/mod4.php">Módulo 4</a></li>
                <li><a href="#" data-modulo="mod5/mod5.php">Módulo 5</a></li>
                <li><a href="#" data-modulo="mod6/mod6.php">Módulo 6</a></li>
                <li><a href="#" data-modulo="mod7/mod7.php">Módulo 7</a></li>
                <li><a href="#" data-modulo="mod8/mod8.php">Módulo 8</a></li>
                <li><a href="#" id="boton_desplazar">Desplazar</a></li>
            </ul>
        </div>
    </div>
</nav>

<script src="mod_menufluid/jquery-2.1.1.min.js"></script>
<script src="mod_menufluid/bootstrap.min.js"></script>
<script src="mod_menufluid/script_menufluid.js"></script>
