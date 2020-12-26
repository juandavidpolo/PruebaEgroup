<?php
function contactM($email, $nombre, $mensaje, $pdo){
    if(strlen($email)<1 or !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $msm = 'El email ingresado no es valido';
        echo '<script>alert("'.$msm.'");</script>';
    }elseif(strlen($nombre)<1){
        $msm = 'El nombre debe ser valido';
        echo '<script>alert("'.$msm.'");</script>';
    }elseif(strlen($mensaje)<1){
        $msm = 'El mensaje es muy corto';
        echo '<script>alert("'.$msm.'");</script>';
    }else{
        $stmt = $pdo->prepare("INSERT INTO `contacto` (`id_contacto`, `email`, `nombre`, `mensaje`) VALUES(NULL, :email, :nombre, :mensaje)");
        $stmt->execute([
            ":email" => $email,
            ":nombre" => $nombre,
            ":mensaje" => $mensaje
            ]);
        //$msm = 'Mensaje recibido';
        //echo '<script>alert("'.$msm.'");</script>';
        echo '<script>var contactEmail = window.open("Assets/Plantillas/contactEmail.php?email='.$email.'","_blank"); contactEmail.focus();</script>';
    }
    return;
}