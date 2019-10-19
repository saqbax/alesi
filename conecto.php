<?php
$mysql = new mysqli("localhost", "alesiorg_usr", "andre.1302", "alesiorg_ale");
if ($mysql -> connect_errno){
    die("Error de conexion: " . $objetoMysqli->mysqli_connect_errno() . ", " . $objetoMysqli->mysqli_connect_error()); 
}
else{
    //echo "La conexion tuvo exito";
   return($mysql); 
}


?>
