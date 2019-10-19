<?php

include ("conecto.php");
session_start();
$usug = $_SESSION["id"];
$caso = $_GET["caso"];

$yoko = "UPDATE  caso set sts = 'RCH', fec_mod = '".date("Y-m-d")."', usu_mod ='$usug'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 

if($usug == '1'){
	echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='bienvenido.php';	
	 </script>";

}
else{
echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='User.php';	
	 </script>";
}


?>