<?php 

include ("conecto.php");
$usr = $_POST["usr"];
$clave = $_POST["clav"];
$acu = $_POST["guests"];
$name = $_POST["name"];
$emp = $_POST["emp"];
$pais = $_POST["country"];
$calle = $_POST["calle"];
$ciudad = $_POST["city"];
$alcal = $_POST["alcal"];
$post = $_POST["postal"];
$desc = $_POST["des"];
$url =$_SERVER['HTTP_REFERER'];
echo "acu es $acu y el otor es $acu2";

 $sql= "select * from usuario where usuario = '$usr' ";
                    $rc = mysqli_query($mysql,$sql);
                    $numfilas = $rc->num_rows;
                      echo "numfilas es $numfilas";

if($numfilas == 0){

	if($acu == 'SI'){

	
//echo "user es $usr la clave $clave pais $pais des $desc nombre $name emp $emp";
$yoko = "INSERT INTO usuario (usuario, clave, acuerdo, nombre, empresa, pais, calle, ciudad, alcaldia, postal, descripcion, sts ,fec_reg, perfil ) 
VALUES ('$usr' , '$clave', '$acu', '$name', '$emp', '$pais', '$calle', '$ciudad', 'alcal', '$post', '$desc', 'ENV','".date("Y-m-d")."','3') "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 

echo"<script>alert ('Registro Exitoso');
	window.location.href='login.html';	
	 </script>";
}
else{
	echo"<script>alert ('Debe Aceptar el Acuerdo');
	window.location.href='$url';	
	 </script>";
}
}
else{
echo"<script>alert ('Nombre de usuario ya Existe');
	window.location.href='$url';	
	 </script>";
}
?>