<?php
$title = 'Suscripción desactivada';
include_once 'Assets/App/conexion.inc.php';
include_once 'Assets/App/newsleatter.inc.php';
include_once 'Assets/Plantillas/head.php';
if(isset($_GET['email'])){
    $pdo = conection();
    unsuscribed($_GET['email'],$pdo);
}else{
    header('index.php');
}
?>
<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Suscripción desactivada</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="productos.php" class="card-link">productos</a>
        </div>
    </div>
</div>
