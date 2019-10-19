<?php
include("conecto.php");
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
$count="select count( d.idcaso),b.nombre,a.siniestro,a.poliza, a.asegurado,a.conductor
from caso a, aseguradora b, archivos d
where a.id_aseg = b.id and a.sts in ('ENV', 'RCH','ELA' ,'APR')
and a.id = d.idcaso and d.sts = 1"; //$hab
/*
select b.nombre as aseg,c.nombre as usu,c.usuario, c.ciudad,c.postal,a.nombre as pais from aseguradora b, usuario c,paises a where a.id = c.pais and c.empresa= b.id and c.sts in ('ENV', 'RCH')*/
//echo"el contador es $count";
$select = "select distinct d.idcaso, a.id,b.nombre as aseg,a.siniestro,a.poliza, a.asegurado,a.conductor,DATE_FORMAT(a.fecha_sini, '%d/%m/%Y') as fecha,a.sts,a.pizarra, a.fecha_usu
from caso a, aseguradora b, archivos d
where a.id_aseg = b.id and a.sts in ('ENV', 'RCH','ELA' ,'APR')
and a.id = d.idcaso and d.sts = 1"; // 

$select .= " LIMIT $init, $limit_end";


/* conexión al servidor de base de datos */
//$mysql = new mysqli(HOST, USER, PASSWD, DB);


   
  $num = $mysql->query($count);
  $x = $num->fetch_array();
 
  $total = ceil($x[0]/$limit_end);
//echo $total;
  echo"<br> <a href = 'agregarArchivos.php' style= 'color: #4E66F8;'> AgregarArchivos $total y $x </a> <br> <br> <h6> Seleccione el Caso para ver sus archivos</h6> <!--<a href = 'UsuariosApr.php' style= 'color: green;'> Ver Usuarios Aprobados</a> -->";


  echo "<br> <br><table border='1' class='table table-responsive table-bordered table-hover'>
 <thead>
  <tr>
  <th><b>Aseguradora</b></th>
  <th><b>Caso</b></th>
  <th><b>P&oacute;liza</b></th>
  <th><b>siniestro</b></th>
  <th><b>Asegurado</b></th>
  <th><b>conductor</b></th>
  <th><b>Fecha del Siniestro</b></th>
   <th><b>Acciones</b></th>
  
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
        $f55 = $row["fecha_usu"];
        $f0 = date("Y-m-d H:i:s");
      
    
        echo" 
          <tr>
          <td align = 'center'> $name</td>
          <td align = 'center'> $caso</td>
            <td align = 'center'> $pol</td>
             <td align = 'center'> $sini</td>
          <td align = 'center'> $asegurado</td>
         
         <td align = 'center'> $conduce</td>
        
         <td align = 'center'> $fec</td>
         
          <td align = 'center'> <a href = 'hola.php' target=' _BLANK'>Ver Archivos </a></td>
        
         </tr>";

        




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