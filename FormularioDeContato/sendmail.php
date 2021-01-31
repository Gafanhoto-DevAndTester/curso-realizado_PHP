<?php


require 'vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$dados =[
    'nome'=>$_POST['nome']??'',
    'pais'=>strtoupper($_POST['pais'])??'',
    'mensagem'=>$_POST['mensagem']??'',
];

$mail=new PHPMailer(true);

try{
//$mail ->SMTPDebug =SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host='smtp.mailtrap.io';
$mail->SMTPAuth=true;
$mail->Username='5954adf1a6e8a9';
$mail->Password='5f9c82a874920e';
$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port=465;
$mail->CharSet='UTF-8';

//DE:
$mail->setFrom('tester@devonfire.com.br',"Beto");
//PARA:
$mail->addAddress('roberto@devonfire.com.br','Roberto');
//CONTEÚDO:
$mail->isHTML(true);
$mail->Subject="Contato do Site.";

$corpo = "<b>NOME: </b> {$dados['nome']}<br/>";
$corpo .= "<b>PAÍS: </b> {$dados['pais']}<br/>";
$corpo .= "<b>MENSAGEM: </b> {$dados['mensagem']}<br/>";

$mail->Body=$corpo;
$mail->send();
echo "Mensagem enviada com sucesso!";

}catch(Exception $e){
    echo "A mensagem não pôde ser enviada. Erro: {$e->errorMessage()}" ;
}
