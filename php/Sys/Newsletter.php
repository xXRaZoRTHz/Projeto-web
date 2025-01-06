<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_email'])) {
    $emaildestino = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($emaildestino, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();                         // Modo de envio de email
            $mail->Host = 'smtp.gmail.com';          // Servidor de SMTP da Google
            $mail->SMTPAuth = true;                  // Requisição de autenticação
            $mail->SMTPSecure = 'tls';               // Modo de segurança da transmissão de dados
            $mail->Username = 'geral.vetworld@gmail.com';  // O seu email
            $mail->Password = 'ggwcofguyeiysaoz';    // A sua senha (use App Passwords para maior segurança)
            $mail->Port = 587;                       // Porta de comunicação

            $mail->setFrom('geral.vetworld@gmail.com', 'VetWorld');  // Email de proveniência
            $mail->addAddress($emaildestino);        // Destinatário

            $mail->isHTML(true);                                // Envio dos dados em formato HTML
            $mail->Subject = "Cadastrado na Newsletter com sucesso!";
            $mail->Body    = nl2br("Parabéns! Você se encontra apto agora a obter as melhores promoções de nossos serviços, bem como novidades!");

            if ($mail->send()) {
                header('Location: ../index.php?enviado=1'); // Redireciona após sucesso
                exit;
            } else {
                echo 'Não foi possível enviar a mensagem.<br>';
                echo 'Erro: ' . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            echo "Erro ao enviar email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Endereço de email inválido.";
    }
} else {
    echo "Nenhum dado foi enviado.";
}
?>
