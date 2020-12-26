<?php
$title = 'productos';
include 'Assets/App/conexion.inc.php';
include_once 'Assets/Plantillas/head.php';
?>
<div class="jumbotron">
            <h1 class="display-4">Productos</h1>
            <p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row" id="productos">
                <?php 
                    include_once 'Assets/App/productos.inc.php';
                    $pdo = conection();
                    allProducts($pdo);
                ?>
            </div>
        </div>
<?php
include_once 'Assets/Plantillas/footer.php';