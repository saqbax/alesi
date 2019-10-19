<?php
if( !isset($_POST["suscriptor"]))
{
    echo"<script>
  alert(' Debe ingresar un correo.');
    window.location.href='index-4.html';
   </script>";
    
}
else{
    $pagina_anterior=$_SERVER['HTTP_REFERER'];
    
$suscribe = $_POST["suscriptor"];
$fecha = date("d/m/Y");

$contenido = "Correo:  ".$suscribe."   en fecha:  ".$fecha;

$fp = fopen("correos.txt","a");
fwrite($fp, $contenido . PHP_EOL);
fclose($fp);

///envio correo a contacto@alesi con la info////////////





require("class.phpmailer.php");
require("class.smtp.php");





$email = $_POST["suscriptor"];



$destinatario = "contacto@alesi.org.mx";

$archivo= "correos.txt";


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "mail.alesi.org.mx";  // Dominio alternativo brindado en el email de alta 
//$smtpUsuario = "contacto@alesi.org.mx";  // Mi cuenta de correo
$smtpUsuario = "webmaster@alesi.org.mx";  // Mi cuenta de correo
//$smtpClave = "alesi.org.mx";  // Mi contraseña
$smtpClave = "webmaster123";  // Mi contraseña




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName =  $email;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Nuevo Suscriptor"; // Este es el titulo del email.
$mail->AddAttachment($archivo,$archivo); //archivo adjunto
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Ha recibido un nuevo mensaje desde el formulario de contacto de alesi.org.mx</h1>

<p>Nuevo suscriptor de la web alesi.org.mx:</p>


<p>email: {$email}</p>

<p>fecha: {$fecha}</p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
  echo"<script>
  alert(' Muchas Gracias por Suscribirte, pronto le contactaremos.');
    window.location.href='$pagina_anterior';
   </script>";
   //header("Location: nosotros.html");
} else {
    echo"<script>
  alert(' Ocurrio un Error Inesperado.');
  window.location.href='$pagina_anterior';
   </script>";
}






 
}
?>
