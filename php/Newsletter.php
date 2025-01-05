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
    $mail->Username = '@gmail.com';          // o seu email
    $mail->Password = 'vossa_password';      // a sua password
    $mail->Port = 587;                       // porta de comunicação

    $mail->setFrom('@gmail.com', 'Cencal');  // email de proveniência
    $mail->addAddress('@gmail.com');        // a quem enviamos
    // Opcional: mais de um destinatário
    // $mail->addAddress('fernando@email.com');

    // Opcionais: CC e BCC
    // $mail->AddCC('joana@provedor.com', 'Joana');
    // $mail->AddBCC('roberto@gmail.com', 'Roberto');

    $mail->isHTML(true);                                // envio dos dados em formato html

    $mail->Subject = "ocorrencia";                      // assunto do email
    $mail->Body    = nl2br($descricao);                 // corpo da mensagem

    // Opcional: Anexos
    // $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf");

    if (!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
      } else {
        header('Location: index.html?enviado');
      }
?>