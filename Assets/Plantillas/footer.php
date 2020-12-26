<?php
include_once 'Assets/App/newsleatter.inc.php';
if(isset($_POST['newsleatter'])){
    news($_POST['email'], $pdo);
}
?>
<footer class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div id="map"></div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3>Newsleatter</h3>
                    <form class="input-group mb-3" method="POST">
                        <input type="email" class="form-control" placeholder="Correo electrónico" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="submit" name="newsleatter">Suscribir</button>
                        </div>
                    </form>
                    <div>
                        <a class="btn btn-social-icon btn-facebook" href="https://es-la.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/?lang=es" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="Assets/Js/location.js"></script>
</html>
