<?php


//configuração das variáveis
$name= $_REQUEST['name'];
$email= $_REQUEST['Email'];
$message= $_REQUEST['Menssagem']
$subject= "message from contacr from !";

$to ="marcelopereiradesousaalves@gamil.com"; //substitua pelo seu e-mail que será enviado

$content = "name : ". $name. "\r\nContact email : " . $email. "\r\n\r\nMessage : \r\n \r\n". $message;