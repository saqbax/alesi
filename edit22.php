<?php

include ("conecto.php");
session_start();
$usug = $_SESSION["id"];
$caso = $_GET["caso"];
$ff = date("Y-m-d H:i:s");
$id = $_GET["id"];
$yoko = "UPDATE  caso set sts = 'ENV', fec_mod = '".date("Y-m-d")."', usu_mod ='$usug',fecha_usu = '$ff'  where id = '$caso' "	;	
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