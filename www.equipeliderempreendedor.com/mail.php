<?php
date_default_timezone_set('America/Bahia');
//Recupera os dados enviados pelo formulário
$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

//Variáveis locais
$Erro = true;
$Nome = $GetPost['name'];
$Email = $GetPost['email'];
$Fone = $GetPost['fone'];

//Date Time Zone
//$Date = new DateTime("now", new DateTimezone("America/Bahia"));

//Incluir a classe PHPMailer
include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

//Enviando o e-mail utilizando a classe PHPMail
$Mailer = new PHPMailer;
$Mailer->CharSet = "utf8";
//$Mailer->SMTPDebug = 3;
$Mailer->IsSMTP();
$Mailer->Host = "smtp.gmail.com";
$Mailer->SMTPAuth = true;
$Mailer->Username = "equipeliderempreendedor@gmail.com";
$Mailer->Password = "16marioe";
$Mailer->SMTPSecure = "tls";
$Mailer->Port = 587;
$Mailer->FromName = "{$Nome}";
$Mailer->From = "equipeliderempreendedor@gmail.com";
$Mailer->AddAddress("equipeliderempreendedor@gmail.com");
$Mailer->IsHTML(true);
$Mailer->Subject = "Novo contato - {$Nome} - ".date("H:i")." - ".date("d/m/Y");
$Mailer->Body = "E-mail enviado por {$Nome}"." - "."{$Email}"." - "."{$Fone}";

//Verificação
if($Mailer->Send()){
    $Erro = false;
}
var_dump($Erro);
