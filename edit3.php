<?php

include ("conecto.php");
session_start();
$usug = $_SESSION["id"];
$caso = $_GET["caso"];
if($_GET["acc"] == 'acp'){
$yoko = "UPDATE  usuario set sts = 'APR', usu_apr = '$usug'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 


echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='Usuarios.php';	
	 </script>";

}
if($_GET["acc"] == 'neg'){
$yoko = "UPDATE  usuario set sts = 'RCH', usu_neg = '$usug'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 


echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='Usuarios.php';	
	 </script>";

}
/*$yoko = "UPDATE  caso set sts = 'APR', fec_apr = '".date("Y-m-d")."', usu_apr ='$usug'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 


echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='verCaso.php';	
	 </script>";

*/

?>