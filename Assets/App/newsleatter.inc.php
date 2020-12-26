<?php
function news($email, $pdo){
    $stmt = $pdo->prepare("SELECT email FROM newsleatter where newsleatter.email = :email");
    $stmt->execute([":email" => $email]);
    $row = $stmt->fetch();
    if($row == TRUE){
        $sms = '<script>alert("Email ya registrado  ");</script>';
        echo $sms;
    }else{
        $stmt = $pdo->prepare("INSERT INTO newsleatter (`id_usuario`, `email`) VALUES (NULL, :email)");
        $stmt->execute([":email" => $email]);
        $sms = '<script>alert("Email registrado: ' . $email.'");</script>';
        echo $sms;
        echo '<script>var contactEmail = window.open("Assets/Plantillas/newsEmail.php?email='.$email.'","_blank"); contactEmail.focus();</script>';
    }
    return;
}
function unsuscribed($email, $pdo){
    $stmt = $pdo->prepare("DELETE * FROM newsleatter where newsleatter.email = :email");
    $stmt->execute([":email" => $email]);
    return;
}