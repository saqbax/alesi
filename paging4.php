<?php
include("conecto.php");

$usug = $_SESSION["perfil"];
$idg = 	$_SESSION["id"];
/*
 * paging.php
 * 
 * Elaborado por: Moisés Icaza
 * Fecha: 01/08/2013
 * 
 * Paginación de registros utilizando PHP (5.4)
 * y componentes de Bootstrap.
 * 
 */

/* constantes 
const HOST = 'localhost';
const USER = 'root';
const PASSWD = '';
const DB = 'surgetravel';
const TABLE = 'hotel';

/* variables */
$order="nombre ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 10;
$init = ($ini-1) * $limit_end;

/* querys 
$count="SELECT COUNT(*) FROM ".TABLE."";
$select = "SELECT *FROM ".TABLE." ORDER BY $order";
$select .= " LIMIT $init, $limit_end";*/
/* querys */
/*$count="select count( a.id),a.nombre, a.direccion,b.Ciudad,c.ubicacion, c.portada,a.estrella, min(d.precio) as preciox 
from hotel a, ciudades b, fotos c, tipo_habitacion d
where a.id= c.id_hotel and c.portada = 'SI' and a.ciudad = b.idCiudades and a.id = d.id_hotel
group by a.id "; //$hab*/
$count="select count( a.id),b.nombre,c.nombre,a.siniestro,a.poliza, a.asegurado,a.conductor,a.sts
from caso a, aseguradora b, usuario c
where a.id_aseg = b.id and a.id_usuario = c.id and a.sts in ('ELA', 'RCH','APR','ENV') and c.id = '$idg'"; //$hab


//echo"el contador es $count";
$select = "select a.id,b.nombre as aseg,c.nombre as usu,a.siniestro,a.poliza, a.asegurado,a.conductor,DATE_FORMAT(a.fecha_sini, '%d/%m/%Y') as fecha,a.sts,a.pizarra
from caso a, aseguradora b, usuario c
where a.id_aseg = b.id and a.id_usuario = c.id and a.sts in ('ELA', 'RCH','APR','ENV') and c.id = '$idg'"; // 

$select .= " LIMIT $init, $limit_end";


/* conexión al servidor de base de datos */
//$mysql = new mysqli(HOST, USER, PASSWD, DB);


   
  $num = $mysql->query($count);
  $x = $num->fetch_array();
 
  $total = ceil($x[0]/$limit_end);
//echo $total;
  echo "<table border='1' class='table table-responsive table-bordered table-hover'>
  <thead>
  <tr>
  <th><b>Aseguradora</b></th>
  <th><b>Referencia</b></th>
  <th><b>P&oacute;liza</b></th>
  <th><b>siniestro</b></th>
  <th><b>Asegurado</b></th>
  <th><b>conductor</b></th>
  <th><b>Fecha del Siniestro</b></th>
  <th><b>Descargar</b></th>
  <th><b>Pizarra</b></th>
  <th><b>Acciones</b></th>
  <th><b>Estatus</b></th>
  </tr>
  </thead>
  <tbody>";
 

  $c = $mysql->query($select);

  while($row = $c->fetch_array(MYSQLI_ASSOC))
  {
        $caso= $row["id"];
    //$ubi = $row["ubicacion"];
        $name = $row["aseg"];
        $name2 = $row["usu"];
        $sini = utf8_encode($row["siniestro"]);
        $pol = $row["poliza"];
        $aseg = $row["aseg"];
        $conduce = $row["conductor"];
        $fec = $row["fecha"];
        $asegurado = $row["asegurado"];
        $sts = $row["sts"];
        $pizarra = $row["pizarra"];
    
        echo" 
          <tr>
          <td align = 'center'> $aseg</td>
          <td align = 'center'> $caso</td>
         <td align = 'center'> $pol</td>
         <td align = 'center'> $sini</td>
         <td align = 'center'> $asegurado</td>
         <td align = 'center'> $conduce</td>
         <td align = 'center'> $fec </td>";
         if(($sts == 'ELA')or ($sts == 'RCH') or ($sts == 'APR') or ($sts == 'ENV')){
       echo" <td align = 'center'> <a href = 'Caso.php?caso=$caso' style= 'color: #4E66F8;'> Bajar PDF</a>  &nbsp; &nbsp; </td>";
        if(($sts == 'APR') and ($pizarra == '1')) {
        echo" <td> </td> ";
       }
       elseif($sts == 'ENV'){
      echo" <td> </td> ";
       }
       else{
        echo" <td><a href = 'editar.php?caso=$caso&v=$usug' style= 'color: #4E66F8;'>Editar</a> </td> ";
       }
       if ($usug == 1){

       echo"<td> <a href = 'edit2.php?caso=$caso' style= 'color: #4E66F8;'>Enviar a Pizarra</a> </td>";
       }
       else{
        if(($sts == 'APR') and ($pizarra == '1') or ($sts == 'ENV')){
         echo"<td>  </td>";
        }
        else{
           echo"<td> <a href = 'edit22.php?caso=$caso' style= 'color: #4E66F8;'>Enviar a Administrador</a> </td>";
        }
       }
       }
            
            else{
               echo" <td align = 'center'> <a href = 'crearPdf.php' style= 'color: #4E66F8;'>Bajar PDF</a> - </td>";
            }


            if($sts == 'ELA'){$sts5 = 'EN ELABORACION';} 
             if($sts == 'ENV'){$sts5 = 'ENVIADA';} 
             if($sts == 'RCH'){$sts5 = 'DEVUELTA';}


if($sts == 'ELA'){
                 echo" <td align = 'center'> <div class='progress'>
               
           <div class='progress-bar bg-danger' role='progressbar' style='width: 40%'' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100'>40%</div>
            </div> $sts5 </td>";
                }
                 if (($sts == 'RCH') or ($sts == 'ENV')){
                 echo" <td align = 'center'> <div class='progress'>
               
           <div class='progress-bar bg-warning' role='progressbar' style='width: 70%'' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100'> 70%</div>
            </div> $sts5</td>";
                }
                if (($sts == 'APR') and ($pizarra == 1)) {
                 echo" <td align = 'center'> <div class='progress'>
               
           <div class='progress-bar bg-success' role='progressbar' style='width: 100%'' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'> 100%</div>
            </div> AROBADA EN PIZARRA</td>";
                } if (($sts == 'APR') and ($pizarra == 0)) {
                 echo" <td align = 'center'> <div class='progress'>
               
           <div class='progress-bar bg-success' role='progressbar' style='width: 80%'' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'> 80%</div>
            </div> BAJADA DE PIZARRA</td>";

                }

         echo" </tr>";

        




  }
  echo" </tbody></table>";
 
 

     echo"  <nav aria-label='Page navigation example' >
            <ul class='pagination pagination-template d-flex justify-content-center'>";
             if(($ini - 1) == 0)
  {
    echo "<li class='page-item disabled'><a href='#' class='page-link'> <i class='fa fa-angle-left'></i></a></li>";
  }
  else
  {
    echo "<li class='page-item '><a href='$url?pos=".($ini-1)."' class='page-link'> <i class='fa fa-angle-left'></i></a></li>";
  }

      for($k=1; $k <= $total; $k++)
  {
    if($ini == $k)
    {
     echo" <li class='page-item active'><a href='#' class='page-link'>".$k."</a></li>";


    }
    else{

      echo "<li class='page-item' ><a href='$url?pos=$k' class='page-link'>".$k."</a></li>"; //
    }
  }
    if($ini == $total)
  {
    echo "<li class='page-item disabled'><a href='#' class='page-link'> <i class='fa fa-angle-right'></i></a></li>";
  }
  else
  {
    echo "<li  class='page-item'><a href='$url?pos=".($ini+1)."' class='page-link'><i class='fa fa-angle-right'></i></a></li>";
  }



echo" </ul>
          </nav>
        </div>
      </div>
    </div>";
?>