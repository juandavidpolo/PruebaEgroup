<?php
function mainProducts($pdo){
    $stmt = $pdo->prepare("SELECT * FROM productos WHERE productos.id <=3");
    $stmt->execute(array());
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $producto){
        echo '<div class="col-12 offset-0 col-sm-4 offset-sm-0">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="'.$producto['img'].'">';
        echo '<div class="card-body">';
        echo '<h3>'.$producto['nombre'].'</h3>';
        echo '<p class="card-text">'.$producto['descripcion'].'</p>';
        echo '<a href="'.$producto['img'].'">Origen de image</a>';
        echo '</div></div></div>';
    }
    return;
}
function allProducts($pdo){
    $stmt = $pdo->prepare("SELECT * FROM productos");
    $stmt->execute(array());
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $producto){
        echo '<div class="col-12 offset-0 col-sm-4 offset-sm-0">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="'.$producto['img'].'">';
        echo '<div class="card-body">';
        echo '<i class="badge badge-danger">$'.$producto['price'].'</i>';
        echo '<h3>'.$producto['nombre'].'</h3>';
        echo '<p class="card-text">'.$producto['descripcion'].'</p>';
        echo '<a href="'.$producto['img'].'">Origen de image</a>';
        echo '</div></div></div>';
    }
    return;
}
