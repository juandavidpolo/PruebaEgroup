<?php
/*$asunto="Hemos recibido tu mensaje";

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
$message .= '<h1 style="padding:10px;" class="text-center">Tu mensaje fue recibido con Exito</h1>';
$message .= '</div>';
$message .= '<div style="padding:10px;height:100%;border-radius: 0px 0px 5px 5px;">';
$message .= '<p>En breve daremos respuesta a tu mensaje.</p>';
$message .= '<p>En breve daremos respuesta a tu mensaje. Este es un codigo para enviar email con las cabeceras y funcion mail comentados para ser visualizados de forma local</p>';
$message .= '<p class="text-muted">No repliques este mensaje.</p>';
$message .= '<p>Te invitamos a que visites este enlace <a href="../../index.php">aquí</a></p>';
$message .='</div></div>';
$message .='</body></html>';
echo $message;

//$registroCorrecto=mail($destinatario, $asunto, $message, $cabeceras);