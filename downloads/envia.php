<?php
    $nome = addslashes($_POST ['nome']);
    $email = addslashes($_POST['e-mail']);
    $celular = addslashes($_POST['celular']);

    $para = "otaviocezar095@gmail.com";
    $assunto = "Duvidas";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."celular: ".$telefone;

    $cabeca = "From otaviocezar095@gmail.com"."\n"."reply-to: ".$email."\n"."x=mailer:PHP/".phpversion();
    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }
?>

