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
$dirig= $_POST["dirig"];
$dirig2= $_POST["dirig2"];
$dirig22= $_POST["dirig22"];
$refint = $_POST["refint"];

//echo "siniestro $sin fecha $fec_sin y reporte $fec_rep poliza $pol inciso $inciso vigencia $ivig y la otra $fvig cobertura $cober asegurado $aseg conductor $conduce $marca $tipov $modelo $color $serie $motor $placa $resul";

$yoko = "INSERT INTO caso ( id_aseg, id_usuario, siniestro, fecha_sini, fecha_report, poliza, ini_vigencia, fin_vigencia, cobertura, asegurado, conductor, id_marca, tipo, modelo, color, nro_serie, nro_motor, placa, resul, decla_aseg, entrevista, visitado, ubicacion, observacion, otro_sini, inciso,documento, fec_doc, razon_social, legal, cotejado, cargo, tlf, contacto, lugar, fec_contact, obs_contact, domicilio, direccion, testigo, nombre, referencia, obsert, poliza_ante, cobertura2, vdesde, vhasta, obserp, ministerio, alcaldia, carpeta, fec_carpeta, hora, registrada, carpeta2, motivo,obsr5, sts,dirigidoa,cargodiri,asuntodiri,refint)
 VALUES ('$empaseg' , '$usug', '$sin', '$fec_sin', '$fec_rep', '$pol','$ivig','$fvig', '$cober', '$aseg','$conduce','$marca', '$tipov', '$modelo', '$color', '$serie', '$motor', '$placa','$resul', '$decla', '$entre', '$visita', '$ubica', '$observa1', '$otro', '$inciso','$doc','$fecdoc', '$razon', '$legal', '$cote', '$cargo', '$tlf', '$contacto', '$lugar', '$feccont', '$obc','$domi', '$dir', '$testi', '
 $nom', '$ref', '$ob2', '$pol2', '$cob2', '$vdsd', '$vhst', '$ob3', '$min' ,'$alcal', '$carp', '$feccar', '$hora', '$regist', '$car2', '$moti', '$ob5','ELA','$dirig','$dirig2','$dirig22','$refint')"	;	
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 
$ultimo = mysqli_insert_id($mysql);

$porsi = $ultimo;

	for($i = 0; $i < $lk; $i++){

	
$yoko2 = "INSERT INTO caso_tiposini (id_caso, id_tiposini) VALUES (".$porsi.", ".$tipo[$i].")";
$res2 = mysqli_query($mysql,$yoko2) or die(mysqli_error()); 
}	

for($j = 0; $j < $lk2; $j++){

	
$yoko2 = "INSERT INTO caso_motivo (id_caso, id_motivo) VALUES (".$porsi.", ".$motivo[$j].")";
$res2 = mysqli_query($mysql,$yoko2) or die(mysqli_error()); 
}
for($h = 0; $h < $lk3; $h++){

	
$yoko2 = "INSERT INTO docu_caso (id_caso, id_doc) VALUES (".$porsi.", ".$pol3[$h].")";
$res2 = mysqli_query($mysql,$yoko2) or die(mysqli_error()); 
}
echo"<script>alert ('Registro Exitoso');
	window.location.href='verCaso.php';	
	 </script>";

?>