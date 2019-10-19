<?php


require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["telefono"])  || !isset($_POST["surname"])  || !isset($_POST["message"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}


$pagina_anterior=$_SERVER['HTTP_REFERER'];

//echo"la pagina es $pagina_anterior";
$nombre = ucwords ($_POST["name"]);

$email = $_POST["email"];

$telefono = $_POST["telefono"];

$asunto = ucwords ($_POST["surname"]);

$mensaje = $_POST["message"];


$destinatario = "contacto@alesi.org.mx";
//$destinatario = "yoko.dra1990@gmail.com";

$nomc= $nombre. " ".$asunto;


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
$mail->FromName = $nomc;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Ha recibido un nuevo mensaje desde el formulario de contacto de alesi.org.mx</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>nombre: {$nomc}</p>

<p>email: {$email}</p>

<p>telefono: {$telefono}</p>


<p>mensaje:<b> {$mensaje} </b></p>

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
 
    window.location.href='mail.php?v=$nombre&v2=$asunto&v3=$email&v4=$pagina_anterior';
   </script>";
   //header("Location: nosotros.html");
} else {
    echo"<script>
  alert(' Ocurrio un Error Inesperado.');
    window.location.href='nosotros.html';
   </script>";
}







?>

