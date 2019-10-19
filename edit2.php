<?php

include ("conecto.php");
session_start();
$usug = $_SESSION["id"];
$caso = $_GET["caso"];
$v = $_GET["v"];
if($v == 1){
$yoko = "UPDATE  caso set sts = 'APR', fec_apr = '".date("Y-m-d H:i")."', usu_apr ='$usug', pizarra = '1'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 

}
else{
$yoko = "UPDATE  caso set sts = 'APR', fec_apr = '".date("Y-m-d H:i")."', usu_apr ='$usug', pizarra = '0'  where id = '$caso' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 

}
echo"<script>alert ('Actualizado Exitosamente');
	window.location.href='bienvenido.php';	
	 </script>";



?>