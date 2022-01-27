<?php

if (isset($_POST['enviar'])){
    if (!empty($_POST['email'])&& !empty($_POST['asunto']) && !empty($_POST['texto'])){
        $mail = $_POST['email'];
        $asunto = $_POST['asunto'];
        $texto = $_POST['texto'];
        $header = "from: maimonney30@gmail.com" . "\r \n";
        $header.= "Reply-to: maimonney30@gmail.com" . "\r \n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = mail($mail,$asunto,$texto,$header);
        if ($mail){
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}