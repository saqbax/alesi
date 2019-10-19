<?php
include("conecto.php");
session_start();
error_reporting();


$iddependencia=$_POST['iddependencia'];


if (isset($_FILES['doc'])){

	$cantidad= count($_FILES["doc"]["tmp_name"]);
	
	$dir2="archivos/".$iddependencia."/";
	for ($i=0; $i<$cantidad; $i++){
		
			if(!file_exists($dir2)){
				mkdir($dir2, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			else{
		$dir= $dir2.$_FILES["doc"]["name"][$i];

		if (strpos($_FILES["doc"]["name"][$i], " ")){
			$url = $_SERVER['HTTP_REFERER'];
			echo"<script> alert ('El nombre del documento No debe tener espacios en blanco'); window.location.href='$url';</script>";
		}
	else{
		//echo "Correcto. La cadena no contiene espacios vacíos.";



		
		//echo $_FILES["doc"]["name"]; echo "<br>";
		
		
	move_uploaded_file($_FILES["doc"]["tmp_name"][$i], $dir);
	echo"la ruta es $dir";
	$SQL="INSERT INTO archivos (idcaso, ruta, sts)
 	VALUES		 ('$iddependencia','$dir', 1)";
	$titular=mysqli_query($mysql,$SQL);

	//echo $SQL;
	

	}
			}
	
	}
	echo"<script> alert ('Datos guardados exitosamente'); window.location.href='Archivos.php';</script>";		

}


?>