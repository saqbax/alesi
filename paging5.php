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
$count="select count(id),nombre, sts from aseguradora where id not in ('3') "; //$hab
/*
select b.nombre as aseg,c.nombre as usu,c.usuario, c.ciudad,c.postal,a.nombre as pais from aseguradora b, usuario c,paises a where a.id = c.pais and c.empresa= b.id and c.sts in ('ENV', 'RCH')*/
//echo"el contador es $count";
$select = "select * from aseguradora  where id not in ('3')"; // 

$select .= " LIMIT $init, $limit_end";


/* conexión al servidor de base de datos */
//$mysql = new mysqli(HOST, USER, PASSWD, DB);


   
  $num = $mysql->query($count);
  $x = $num->fetch_array();
 
  $total = ceil($x[0]/$limit_end);
//echo $total;
  echo"<br> <a href = 'crearAseguradora.php' style= 'color: #4E66F8;'> Agregar Aseguradora </a> ";


  echo "<br> <br><table border='1' class=' table table-responsive table-bordered table-hover align= 'center'>
  <thead>
  <tr>
  <th><b>Nombre</b></th>
  <th><b>Estatus</b></th>
 
  <th><b>Acciones</b></th>
  </tr>
  </thead>
  <tbody>";
 

  $c = $mysql->query($select);

  while($row = $c->fetch_array(MYSQLI_ASSOC))
  {
        $caso= $row["id"];
    //$ubi = $row["ubicacion"];
        $name = utf8_encode($row["nombre"]);
     
        $sts = $row["sts"];
        if($sts == 'APR'){
          $sts2 = " <td align = 'center' style = 'color:blue;'>Activo </td>";
        }
         if($sts == 'RCH'){
          $sts2 = "<td align = 'center' style = 'color:red;'>Rechazado </td>";
        }
    
        echo" 
          <tr>
          
         <td align = 'center'> $name</td>
         
           $sts2";
         if($sts == 'APR'){
       echo" <td align = 'center'>  <a href = 'edit4.php?caso=$caso&acc=neg' style= 'color: red;'> Rechazar</a> </td> ";
            }
             if($sts == 'RCH'){
            echo" <td align = 'center'> <a href = 'edit4.php?caso=$caso&acc=acp' style= 'color: #4E66F8;'> Aprobar</a>  &nbsp; &nbsp; </td>";
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