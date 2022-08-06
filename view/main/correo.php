<?php 

    $destinatario = 'dream.my426@gmail.com';
    //esto es al correo al que se enviará el mensaje
    $nom = $_POST['txtNombre'];
    $email = $_POST['txtCorreo'];
    $asunto = $_POST['txtAsunto'];
    $msg = $_POST['txtArea'];
    $header = "Enviado desde la pagina de Mundo Nuevo";
    $mensaje = $msg . "\nAtentamente: " . $nom;
    mail($destinatario,$asunto,$mensaje,$header);

    echo "<script>alert('Correo enviado exitosamente')</script>";
    



?>

