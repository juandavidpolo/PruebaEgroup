<?php
$title = 'Contacto';
include_once 'Assets/App/contact.inc.php';
include_once 'Assets/App/conexion.inc.php';
include_once 'Assets/Plantillas/head.php';
if(isset($_POST['contact'])){
    $pdo = conection();
    contactM($_POST['emailContact'], $_POST['name'], $_POST['text'], $pdo);
}
?>
        <div class="jumbotron">
            <h1 class="display-4">Contacto</h1>
            <p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Empresa</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2 class="text-center">¿Necesitas Ayuda?</h2>
                    <address>
		        P sherman<br />
		        calle wallaby 42<br/>
		        sydney<br/>
                        <i class="fa fa-phone fa-lg"></i><a href="tel::+573167530428"> +57 316 753 0428</a><br/>
                        <i class="fa fa-whatsapp fa-lg"></i><a href="https://wa.me/573167530428"> +57 316 753 0428</a><br/>
		        <i class="fa fa-envelope fa-lg"></i><a href="mailto:info@benditaempanada.com"> info@benditaempanada.com</a>
                    </address>
                </div>
                <div class="col-12 col-sm-6">
                    <p class="text-justify">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-12 col-sm-8 offset-sm-2">
                <h2 class="text-center">Formato de asistencia</h2>
                <form method="POST">
                    <div>
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div>
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="emailContact">
                    </div>
                    <div>
                        <label for="text" class="form-label">Mensaje</label>
                        <textarea class="form-control" rows="5" maxlength="300" id="text" name="text"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="contact">Enviar</button>
                </form>
            </div>
        </div>
<?php
include_once 'Assets/Plantillas/footer.php';
