<?php
$enviar=$_GET["v3"];
$nobre = $_GET["v"]." ".$_GET["v2"];
$pag = $_GET["v4"];
//echo "pagina es $pag";
	$to = $enviar; // this is your Email address
//		$to = "juliodra_1990@hotmail.com"; // this is your Email address
//	$from  = $_POST['email']; // this is the sender's Email address
	$from  ="contacto@alesi.org.mx";
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$note = $_POST['note'];


	$subject = "alesi.org.mx";
	//$message = $sender_name . " has send the contact message! His/ her phone number is : " .  $phone . ", and his / her address is " . $address . ". He / she wrote the following... ". "\n\n" . $note;
	$message = "<html>
						<head>
							<title></title>
						</head>
						<body>
							 
							 <p>Hola".$nobre.", gracias por ponerte en contacto con nosotros, en breve se le asignar&aacute; un abogado.</p>
							 <hr>
							 
						</body>
						</html>";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

	$headers .= 'From: ' . $from;
$envio =	mail($to, $subject, $message, $headers);
if($envio) {
  echo"<script>
  alert(' El correo fue enviado correctamente.');
    window.location.href='$pag';
   </script>";
}
else{
    
     echo"<script>
  alert(' Ocurrio un error intente mas tarde.');
    window.location.href='nosotros.html';
   </script>";
}

?>
