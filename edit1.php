<?php

include ("conecto.php");
session_start();
$usug = $_SESSION["id"];
$sin = $_POST["nsin"];
$fec_sin = $_POST["fsin"];
$fec_rep = $_POST["frep"];
$pol = $_POST["pol"];
$inciso = $_POST["inci"];
$ivig = $_POST["ivig"];
$fvig = $_POST["fvig"];
$cober = $_POST["cober"];
$aseg = $_POST["aseg"];
$conduce = $_POST["conduce"];
$tipo = $_POST["tiposin"];
$lk = count($tipo);
$marca = $_POST["marca"];
$tipov = $_POST["tipov"];
$modelo = $_POST["modelo"];
$color = $_POST["color"];
$serie = $_POST["serie"];
$motor = $_POST["motor"];
$placa = $_POST["placa"];
$motivo = $_POST["motivo"];
$lk2 = count($motivo);
$resul = $_POST["sinies"];
$decla = $_POST["desarrollo"];
$entre = $_POST["entrevista"];
$visita = $_POST["visitado"];
$ubica = $_POST["ubica"];
$observa1 = $_POST["observ"];
$otro = $_POST["otro"];
$doc = $_POST["doc"];
$fecdoc = $_POST["fecdoc"];
$razon = $_POST["razon"];
$legal= $_POST["legal"];
$cote = $_POST["cotejo"];
$cargo = $_POST["cargo"];
$tlf = $_POST["tlf"];
$contacto = $_POST["contacto"];
$lugar = $_POST["lugar"];
$feccont = $_POST["feccontacto"];
$obc = $_POST["observ2"];
$domi = $_POST["domicilio1"];
$dir = $_POST["dirdom"];
$testi= $_POST["vehiculo2"];
$nom = $_POST["ncontacto"];
$ref = $_POST["dircontact"];
$ob2 = $_POST["observ3"];
$pol2 = $_POST["polk"];
$cob2 = $_POST["cober2"];
$vdsd = $_POST["vdsd"];
$vhst = $_POST["vhst"];
$ob3 = $_POST["observ4"];
$min = $_POST["ministerio"];
$alcal = $_POST["alcaldia"];
$carp = $_POST["carpeta"];
$feccar = $_POST["fcarpeta"];
$hora = $_POST["horas"];
$regist = $_POST["regis"];
$car2 = $_POST["carpeta2"];
$moti = $_POST["mcarpeta"];
$ob5 = $_POST["observ5"];
$pol3 = $_POST["pol3"];
$lk3 = count($pol3);
$empaseg = $_POST["empaseg"];

echo"empaseg =$empaseg";

$yoko = "UPDATE  caso set siniestro= '$sin', fecha_sini = '$fec_sin', fecha_report = '$fec_rep', poliza = '$pol', ini_vigencia = '$ivig', fin_vigencia = '$fvig', cobertura = '$cober', asegurado = '$aseg', conductor = '$conduce', id_marca ='$marca', tipo = '$tipov', 
modelo = '$modelo', color ='$color', nro_serie = '$serie', nro_motor = '$motor', placa= '$placa', resul = '$resul', decla_aseg = '$decla', entrevista = '$entre', visitado = '$visita', ubicacion = '$ubica', observacion = '$observa1', otro_sini = '$otro', 
 inciso = '$inciso', documento = '$doc', fec_doc = '$fecdoc', razon_social = '$razon', legal = '$legal', cotejado = '$cote', 
 cargo = '$cargo', tlf = '$tlf', contacto = '$contacto', lugar = '$lugar', fec_contact = '$feccont', obs_contact = '$obc', 
 domicilio = '$domi', direccion= '$dir', testigo = '$testi', nombre = '$nom', referencia = '$ref', obsert = '$ob2', poliza_ante = '$pol2', cobertura2 = '$cob2', vdesde = '$vdsd', vhasta = '$vhst', obserp = '$ob3', ministerio = '$min', alcaldia = '$alcal',
  carpeta = '$carp', fec_carpeta = '$feccar', hora = '$hora', registrada = '$regist', carpeta2 = '$car2', motivo = '$moti',obsr5 = '$ob5', fec_mod = '".date("Y-m-d")."' where id = '$empaseg' "	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 

$yoko23 ="delete from caso_tiposini where id_caso = $empaseg ";
	$res23 = mysqli_query($mysql,$yoko23) or die(mysqli_error()); 

	for($i = 0; $i < $lk; $i++){

	
$yoko2 = "INSERT INTO caso_tiposini (id_caso, id_tiposini) VALUES (".$empaseg.", ".$tipo[$i].")";
$res2 = mysqli_query($mysql,$yoko2) or die(mysqli_error()); 
}	



$yoko231 ="delete from caso_motivo where id_caso = $empaseg ";
	$res231 = mysqli_query($mysql,$yoko231) or die(mysqli_error()); 


for($j = 0; $j < $lk2; $j++){

	
$yoko2 = "INSERT INTO caso_motivo (id_caso, id_motivo) VALUES (".$empaseg.", ".$motivo[$j].")";
$res2 = mysqli_query($mysql,$yoko2) or die(mysqli_error()); 
}

$yoko2313 ="delete from docu_caso where id_caso = $empaseg ";
	$res2313 = mysqli_query($mysql,$yoko2313) or die(mysqli_error()); 

for($h = 0; $h < $lk3; $h++){

	
$yoko2 = "INSERT INTO docu_caso (id_caso, id_doc) VALUES (".$empaseg.", ".$pol3[$h].")";
$res2 = mysqli_query($mysql,$yoko2) or die(mysqli_error()); 
}
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