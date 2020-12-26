<?php
$title = 'Bendita Empanada';
include_once 'Assets/App/conexion.inc.php';
include_once 'Assets/Plantillas/head.php';
?>  
        <div class="container">
            <h1 class="text-center">Lorem ipsum</h1>
            <div class="row">
                <div class="col-12 col-sm-4 offset-sm-1">
                    <img src="https://dummyimage.com/200x200/fff/aaa" class="img-fluid mx-auto d-block">
                </div>
                <div class="col-12 col-sm-4 offset-sm-2">
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="text-center">Nuestros productos</h2>
            <div class="row row-content" id="mainProducts">
                <?php 
                    include_once 'Assets/App/productos.inc.php';
                    $pdo = conection();
                    mainProducts($pdo);
                ?>
            </div>
            <div class="text-center">
                <a href="productos.php" class="btn btn-primary">Ver mas</a>
            </div>
        </div>
<?php
include_once 'Assets/Plantillas/footer.php';