<?php

	$from = "yoko.dra1990@gmail.com"; // this is your Email address
//		$to = "juliodra_1990@hotmail.com"; // this is your Email address
//	$from  = $_POST['email']; // this is the sender's Email address
	$to  ="info@alesi.org.mx";
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$note = $_POST['note'];


	$subject = "Form submission";
	//$message = $sender_name . " has send the contact message! His/ her phone number is : " .  $phone . ", and his / her address is " . $address . ". He / she wrote the following... ". "\n\n" . $note;
	$message = "<html>
						<head>
							<title></title>
						</head>
						<body>
							 <h2>Haz recibido un mensaje através de la página</h2>
							 <p>'.$sender_name. ' te ha enviado el siguiente mensaje:</p>
							 <p>'.$note. ' <br><br> Puedes ponerte en contacto con la persona al email: '.$from.'</p>
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
    window.location.href='nosotros.html';
   </script>";
}
else{
    
     echo"<script>
  alert(' Ocurrio un error intente mas tarde.');
    window.location.href='nosotros.html';
   </script>";
}

?>
