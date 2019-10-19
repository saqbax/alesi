<?php

include ("conecto.php");
session_start();
$usug = $_SESSION["id"];
$caso = $_GET["caso"];
if($_GET["acc"] == 'acp'){
$yoko = "UPDATE  aseguradora set sts = 'APR'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 


echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='Aseguradora.php';	
	 </script>";

}
if($_GET["acc"] == 'neg'){
$yoko = "UPDATE  aseguradora set sts = 'RCH'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 


echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='Aseguradora.php';	
	 </script>";

}
/*$yoko = "UPDATE  caso set sts = 'APR', fec_apr = '".date("Y-m-d")."', usu_apr ='$usug'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 


echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='verCaso.php';	
	 </script>";

*/

?>