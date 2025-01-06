<?php
    require 'php/PHPMailer/src/Exception.php';
    require 'php/PHPMailer/src/PHPMailer.php';
    require 'php/PHPMailer/src/SMTP.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();                         // modo de envio de email
    $mail->Host = 'smtp.gmail.com';          // servidor de smtp da Google
    $mail->SMTPAuth = true;                  // requisição de autenticação
    $mail->SMTPSecure = 'tls';               // modo de segurança da transmissão de dados
    $mail->Username = 'geral.vetworld@gmail.com';          // o seu email
    $mail->Password = 'ggwcofguyeiysaoz';      // a sua password
    $mail->Port = 587;                       // porta de comunicação

    $mail->setFrom('geral.vetworld@gmail.com', 'VetWorld');  // email de proveniência
    $mail->addAddress($emaildestino);        // a quem enviamos
    // Opcional: mais de um destinatário
    // $mail->addAddress('fernando@email.com');

    // Opcionais: CC e BCC
    // $mail->AddCC('joana@provedor.com', 'Joana');
    // $mail->AddBCC('roberto@gmail.com', 'Roberto');

    $mail->isHTML(true);                                // envio dos dados em formato html

    $mail->Subject = "Cadastrado na Newsletter com sucesso!";                      // assunto do email
    $mail->Body    = nl2br("Parabéns! Você se encontra apto agora a obter as melhores promoções de nossos serviços, bem como novidades!");                 // corpo da mensagem

    // Opcional: Anexos
    // $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf");

    if (!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
      } else {
        header('Location: index.html?enviado');
      }
?>