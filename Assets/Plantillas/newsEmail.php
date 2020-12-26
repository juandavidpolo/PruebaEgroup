<?php
/*$asunto="Suscrito a nuestro newsleatter";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1\r\n';

$cabeceras .= 'To: >'. $_GET['email'] . '>' . "\r\n";
$cabeceras .= 'From: info@benditaempanada.com' . "\r\n";
$cabeceras .= 'Cc: ' . "\r\n";
$cabeceras .= 'Bcc: ' . "\r\n";*/

$message = '<html><head>';
$message .= '<meta charset="UTF-8">';
$message .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
$message .= '<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">';
$message .= '</head>';
$message .= '<body style="background:#FFF1AD; margin:0px; padding:0px; width:100%; margin:0px; font-family:"Muli",sans-serif;">';
$message .= '<div class="container">';
$message .= '<div>';
$message .= '<h1 style="padding:10px;" class="text-center">Genial te has suscrito a nuestro newsleatter</h1>';
$message .= '</div>';
$message .= '<div style="padding:10px;height:100%;border-radius: 0px 0px 5px 5px;">';
$message .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
$message .= '<img src="https://dummyimage.com/200x200/fff/aaa" class="img-fluid mx-auto d-block">';
$message .= '<p class="text-muted">No repliques este mensaje.</p>';
$message .= '<p>Si deseas eliminar la suscripción da clic <a href="../../unsuscribed.php?email='.$_GET['email'].'">aquí</a></p>';
$message .='</div></div>';
$message .='</body></html>';
echo $message;

//$registroCorrecto=mail($destinatario, $asunto, $message, $cabeceras);