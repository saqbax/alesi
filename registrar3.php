<?php 
include ("conecto.php");
$usr = $_POST["usr"];

$url =$_SERVER['HTTP_REFERER'];
//echo "acu es $acu y el otor es $acu2";



 $sql= "select * from aseguradora where nombre = '$usr' ";
                    $rc = mysqli_query($mysql,$sql);
                    $numfilas = $rc->num_rows;
                   //   echo "numfilas es $numfilas";

//echo "el perfil es $perg y la empresa es $emp y acu es $acu";

if($numfilas == 0){

	

	
//echo "user es $usr la clave $clave pais $pais des $desc nombre $name emp $emp";
$yoko = "INSERT INTO aseguradora (nombre, sts ) 
VALUES ('$usr' , 'APR') "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 

echo"<script>alert ('Registro Exitoso');
	window.location.href='Aseguradora.php';	
	 </script>";


}
else{
echo"<script>alert ('Nombre de Aseguradora ya Existe');
	window.location.href='$url';	
	 </script>";
}

?>