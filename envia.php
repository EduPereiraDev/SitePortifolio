<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $cell = addslashes($_POST['cell']);
    $mns = addslashes($_POST['mns']);

    $para = "pereirassantosedu@gmail.com";
    $assunto = "Contato pelo Site";
    $corpo = "Nome: ".$nome."\n".   " E-mail: ".$email." \n" - "Celular: ".$cell."\n" - "Mensagem: ".$mns;

    $cabeca = "From: pereirassantosedu@gmail.com" . "\n" . "Reply-To: ".$email."\n" . "X-Mailer: PHP/".phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem!');</script>";
    }

?>