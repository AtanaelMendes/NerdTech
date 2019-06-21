<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>

<?php				
			
	
ob_start();
function inicio(){
	
$name = $_GET['name'];
$mailcontato = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];
	
echo "<div class='row'><div class='bg-info col-sm-12 text-center'><strong>" .$name. "</strong></div>
      <div class='bg-warning col-sm-12 text-center'><strong>Email:</strong> " .$mailcontato."  <strong>Telefone:</strong> ".$phone. "</div>
	  <div class='bg-default col-sm-12 text-center'>" .$message. "</div></div>  ";}

echo inicio();
	
$email = ob_get_clean();
 // Os arquivos do PHPMailer foram extraidos na pasta /mail
 
  require 'phpmailer/class.phpmailer.php';
  require 'phpmailer/class.smtp.php';
 
  $mail = new PHPMailer();
  $mail->setLanguage('pt');
 
//Variaveis de configuração do servidor do GMAIL
 
  $host     = 'smtp.umbler.com';
  $username = 'atanaelmendes@tecnologianerd.com';
  $password = 'hades666';
  $port     = 587;
  $secure   = 'tls';
 
  $from     = $username;
  $fromName = 'Contato NerdTech'; 
  $mail->isSMTP();
  $mail->Host = $host;
  $mail->SMTPAuth   = true;
  $mail->Username   = $username;
  $mail->Password   = $password;
  $mail->Port       = $port;
  $mail->SMTPSecure = $secure; 
  $mail->From       = $from;
  $mail->FromName   = $fromName;
  $mail->addReplyTo($from, $fromName); 
  $mail->addAddress('atanaelmendes@tecnologianerd.com', 'atanaelmendes@tecnologianerd.com'); 
  $mail->addAddress('atanael_snp@hotmail.com', 'Atanael Mendes');   
  $mail->isHTML(true);
  $mail->CharSet     = 'utf-8';
  $mail->WordWrap    = 70; 
// Exemplos de texto para o e-mail com HTML e sem. 
  $mail->Subject     = 'Há um contato de cliente';
  $mail->Body        = $email;
  $mail->AltBody      = 'Gerado NerdTech'; 
// Faz a validação se a mensagem foi enviada para o servidor. 
  $send = $mail->Send(); 
  if($send){
      echo "<div class='alert alert-success' style='margin-top: 10px;' role='alert'>E-MAIL ENVIADO!</div>";}
  else{
   echo "<div class='alert alert-danger' style='margin-top: 10px;' role='alert'>FALHA NO ENVIO! PROBLEMA NO SISTEMA!</div>";	}
					
?>

</body>
</html>