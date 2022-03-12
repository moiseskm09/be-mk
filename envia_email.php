<?php

//Importa classes PHPMailer para o namespace global 
//Elas devem estar no topo do seu script, não dentro de uma função 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$robo = $_REQUEST['robos'];
if (!empty($robo)) {
    header("location: https://be-mk.com");
} else {
    $email = $_REQUEST['email'];
    $nome = $_REQUEST['nome'];
    $assunto = $_REQUEST['assunto'];
    $telefone = $_REQUEST['telefone'];
    $mensagem = $_REQUEST['mensagem'];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';                     //Configura o servidor SMTP para enviar através de 
    $mail->Port = 587; 
    $mail->SMTPAuth = true;                                   //Ativar autenticação SMTP 
    $mail->Username = 'bemktech1217@gmail.com';                     //Nome de usuário SMTP 
    $mail->Password = 'bemk@1217';
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    $mail->SMTPDebug = 2;
    $mail->setFrom('bemktech1217@gmail.com', 'Site beMK');
    $mail->AddAddress('bemktech1217@gmail.com', 'Contato beMK');
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Novo contato atráves do site -' . $assunto;
    $mail->Body = "<table cellspacing='0' cellpadding='0' style='border: 1px solid #F7AF24'>
    <thead style='background-color:#ffffff; '>
        <tr>
            <th width='20%;' align='center' style='padding:20px;'><img class='adapt-img' src='https://be-mk.com/includes/imagens/logo_beMK.webp' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='100'></th>
            <th style='vertical-align:inherit;color:#164259;font-size:20px; padding:20px;' width='80%;'>Novo contato atráves do site - $assunto</th>
        </tr>
    </thead>
    <tbody style='background-color:#ffffff; '>
        <tr>
            <td align='center' colspan='2'>
                <br>
                <p align='left' style='padding-left: 10px; font-size: 18px;'>
                   <span style='font-weight:400; color: #F7AF24;'>Nome: </span style='color: #164259;'>$nome<br><br>
                        <span style='font-weight:400; color: #F7AF24;'>E-mail: </span style='color: #164259;'>$email<br><br>
                            <span style='font-weight:400; color: #F7AF24;'>Telefone: </span style='color: #164259;'>$telefone<br><br>
                                <span style='font-weight:400; color: #F7AF24;'>Assunto: </span style='color: #164259;'>$assunto<br><br>
                                     <span style='font-weight:400; color: #F7AF24;'>Mensagem: </span style='color: #164259;'>$mensagem<br><br>
                                      
                </p>
            </td>
        </tr>
    </tbody>
</table>";
    $enviado = $mail->Send();
}