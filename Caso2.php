<?php 
include ("conecto.php");
session_start();
if (!isset($_SESSION["id"])){
header('location:index.html');

}
$caso = $_GET["caso"];

                $sql1= "select * from caso where id = '$caso'";
                    $rc1 = mysqli_query($mysql,$sql1);
                      while($row = mysqli_fetch_array($rc1)){
                        $id = $row["id"];
                        $sini = $row["siniestro"]; $f1 = $row["fecha_sini"]; $f2 = $row["fecha_report"];
                        $pol = $row["poliza"]; $f0 = $row["fec_crea"]; $f3 = $row["ini_vigencia"];  $f4 = $row["fin_vigencia"];
                        $cob = $row["cobertura"]; $aseg = $row["asegurado"];$cond = $row["conductor"];
                   $inci = $row["inciso"]; $id1 = $row["id_marca"]; $tip = $row["tipo"]; $mod = $row["modelo"]; $color = $row["color"];$serie = $row["nro_serie"];$motor = $row["nro_motor"];$placa = $row["placa"];$res = $row["resul"];$dec = $row["decla_aseg"];$ent = $row["entrevista"];$vis = $row["visitado"];$ubi = $row["ubicacion"];
                   $ob1 = $row["observacion"];$doc = $row["documento"];$f5 = $row["fec_doc"];$razon = $row["razon_social"];$legal = $row["legal"];$cot = $row["cotejado"]; $cargo = $row["cargo"];$tlf = $row["tlf"];$contact = $row["contacto"];$lugar = $row["lugar"];$f6 = $row["fec_contact"];$ob2 = $row["obs_contact"];$dom = $row["domicilio"];$dir = $row["direccion"];$testi = $row["testigo"];$name = $row["nombre"];$ref = $row["referencia"];$ob3 = $row["obsert"];$ante = $row["poliza_ante"];$cob2 = $row["cobertura2"];$f7 = $row["vdesde"];$f8 = $row["vhasta"];$ob4 = $row["obserp"];$min = $row["ministerio"];$alcal = $row["alcaldia"];$c1 = $row["carpeta"];$f9 = $row["fec_carpeta"];$hora = $row["hora"];$regis = $row["registrada"];$c2 = $row["carpeta2"];$mot = $row["motivo"];$ob5 = $row["obsr5"];
                    $dirigi = utf8_encode($row["dirigidoa"]);$dirigi1 =utf8_encode( $row["cargodiri"]);$dirigi2 =utf8_encode( $row["asuntodiri"]);$dirigi3 = $row["refint"];$idasegj = $row["id_aseg"];
                      }
                       
                        $sql1t= "SELECT * from aseguradora where id = '$idasegj' ";
                                      $rc1t = mysqli_query($mysql,$sql1t);
                                        if($row = mysqli_fetch_array($rc1t)){
                                          $id = $row["id"];
                                          $desl = $row["nombre"];
                                        }

?>
<form method="post" action="edit1.php" enctype="multipart/form-data" style="align: center">

<div style ='width: 22cm; margin:22px auto;margin-top:-20px; height:29.7cm; align=center; table.auto {table-layout: auto};  '>
  <!-- border: 1px; border-color: black; border-style: solid;-->
        <div>
    <img src='img/logo1.png' align='auto' width='30%'>
    
    </div>
                         <div> 
                                
                              

                                                  <table align='right' style = 'font-size: 14px;  margin-top: -50px;'> 

                                                  
                                                         <tr align='right'>
                                                         	<?php
												setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
												$f01 = $f0;
												$fecha = strftime("%d de %B de %Y", strtotime($f01));
												//echo $fecha; // 09 de marzo de 2010?>
                                                        <td align='right'> <p> <b>Ciudad de M&eacute;xico a  <?php echo $fecha;?>   &nbsp;&nbsp;&nbsp;&nbsp; </b></p> </td> </td> 
                                                            
                                                         </tr> <tr align='right'> 
                                                        <td align='right'> <p> &nbsp;&nbsp; &nbsp;&nbsp; <b><?php echo $dirigi3;?> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  </b></p> </td> </td> 
                                                            
                                                         </tr>
                  
                                                       
                                                     </table>

                                      <table align='left' style = 'font-size: 14px;  margin-top: 40px;margin-left: 20px;'> 

                                  
                                         <tr align='left'>
                                        <td > <p> <b><?php echo $desl;?> </b></p> </td> </td> 
                                            
                                         </tr>
                                          <tr align='left'> 
                                        <td align='left'> <p> <b><?php echo $dirigi;?> </b></p> </td> </td> 
                                            
                                         </tr> <tr align='left'>
                                        <td > <p> <b><?php echo $dirigi1;?></b></p> </td> </td> 
                                            
                                         </tr>
                                          <tr align='left'> 
                                        <td align='left'> <p> <b>Presente.</b></p> </td> </td> 
                                            
                                         </tr>
  
                                       
                                     </table>
         <table align='right' style = 'font-size: 14px; margin-top: 170px; ' > 

                                  
                                         <tr align='right'>
                                        <td align='right'> <p> <b>Asunto: <?php echo $dirigi2;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</b></p> </td> </td> 
                                            
                                         </tr> 
                                       
            </table>   
                          <table align='left' style = 'font-size: 14px;  margin-right: 35px; margin-left: 20px;'> 

                                  
                                         <tr align='justify'>
                                        <td > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  En relaci&oacute;n al siniestro citado anteriormente, mismo que nos encomend&oacute; hacer un an&aacute;lisis, e investigaci&oacute;n del hecho ocurrido, y de acuerdo a las diferentes t&eacute;cnicas y m&eacute;todos de investigaci&oacute;n empleados le proporciono el siguiente informe detallado. </p> </td> </td> 
                                            
                                         </tr>
                                      <tr>
                                          <td> <br></td>
                                        </tr>
  
                                       
                                     </table>  


                         
                          <table align='left' style = 'font-size: 14px;   margin-left: 250px;'> 
                            <tr align='center'>
                                          <th align='center'><center> DATOS DEL SINIESTRO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>
                          <table align='left' style = 'font-size: 14px;   margin-left: 0px; margin-top: 0px;'> 

                                  
                                         
                                        <tr align='left'>
                                          <?php if($sini != ''){ 
                                       echo" <td align='left' width=''> No. Siniestro: &nbsp;&nbsp;&nbsp;&nbsp; $sini &nbsp;&nbsp;&nbsp;&nbsp; </td> ";}?>
                                     
                                      
                                        <td  align='left'>&nbsp;&nbsp;&nbsp;&nbsp; Fecha del Siniestro:&nbsp;&nbsp;&nbsp;&nbsp; <?php $f11 = strftime("%d de %B de %Y", strtotime($f1)); echo $f11; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                      
                                         
                                          
                                        <td  align='left'>&nbsp;&nbsp;&nbsp;&nbsp; Fecha del Reporte:&nbsp;&nbsp;&nbsp;&nbsp; <?php $f22 = strftime("%d de %B de %Y", strtotime($f2)); echo $f22; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                          
                                         
                                          
                                         </tr> 
                                      <tr><td><br></td></tr>

                                       <tr align='left'>
                                        
                                        <td align='left' > No. de P&oacute;liza:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $pol; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>  
                                        
                                        <td  align='left'>&nbsp;&nbsp;&nbsp;&nbsp; Inciso: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $inci; ?>&nbsp;&nbsp;&nbsp;&nbsp; </td> 
                                      
                                      
                                        <td  align='left'>&nbsp;&nbsp;&nbsp;&nbsp; Inicio Vigencia:&nbsp;&nbsp;&nbsp;&nbsp; <?php $f33 = strftime("%d de %B de %Y", strtotime($f3)); echo $f33; ?>&nbsp;&nbsp;&nbsp;&nbsp; </td> 
                                      
                                        
                                      </tr >
                                      <tr><td><br></td></tr>
                                      </table>
                                      <table  align='left' style = 'font-size: 14px;   margin-left: 0px; margin-top: 0px;'>
                                      <tr align='left'>
                                          <td  align='left'> T&eacute;rmino Vigencia:&nbsp;&nbsp;&nbsp;&nbsp; <?php  $f44 = strftime("%d de %B de %Y", strtotime($f4)); echo $f44; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                     
                                         <td  align='right'> Cobertura:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $cob; ?> </td>
                                      </tr>
                                       <tr><td><br></td></tr>
                                    </table>

                                      
                                      <table align='left' style = 'font-size: 14px;   margin-left: -3px; margin-top: 0px;'> 
                                      <tr align='left'>
                                         
                                        
                                      <tr align='left'  >
                                         <td  align='left'> Nombre del Asegurado:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $aseg; ?></td> 
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                             <td  align='left' > Nombre del Conductor:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cond; ?> </td> 

                                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         </tr>
                                      
                                         <tr><td><br></td> </tr>
                                       
                                     </table>   
                                        <table align='left' style = 'font-size: 14px;   margin-top: 10px;'> 
                                      <tr align='left'>
                                         <td  align='left'> <b>Tipo de siniestro </b> &nbsp; Robo:&nbsp;&nbsp;&nbsp;&nbsp; </td> 
                                  <?php
                                            $sql1= "SELECT c.id, c.tipo, h.id_caso 
                                            FROM tipo_siniestro c, caso_tiposini h 
                                            where h.id_tiposini= c.id and h.id_caso = '$caso'";
                                      $rc1 = mysqli_query($mysql,$sql1);
                                        while($row = mysqli_fetch_array($rc1)){
                                          $id = $row["id"];
                                          $des = $row["tipo"];
                                            $idh =$row["id_caso"];

                                         
                                              echo"<td  align='right'>  ".utf8_encode($des)." &nbsp;&nbsp;&nbsp;&nbsp; </td>  <td>&nbsp;&nbsp;&nbsp;&nbsp; </td>  ";
                                             
                                          }
                                    ?>
                                       
                                         <!-- <td  align='right'>&nbsp;&nbsp;&nbsp;  Otros:</td> --> <td>  </td> 

                                            
                                         </tr>
                                        <tr><td><br></td> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                                      
                                     </table>           
                            <table align='left' style = 'font-size: 14px;   margin-left: -170px; margin-top: 70px;'> 
                            <tr align='center'>
                                          <th align='center'><center> DATOS DEL VEH&Iacute;CULO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                            <table align='left' style = 'font-size: 14px;    margin-right: 15px; margin-top: 80px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='left' width=""> Marca:&nbsp;&nbsp;&nbsp;&nbsp; 
								
                                        	<?php 
                                        		$sql= "select * from marca where id = $id1";
										$rc = mysqli_query($mysql,$sql);
											if($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$marca = $row["marca"];
										echo"".utf8_encode($marca)."";
                  }
                       
                                        	?> &nbsp;&nbsp;&nbsp;&nbsp;
                                         </td> 
                                       
                                       <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td  align='left'> Tipo: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $tip; ?> &nbsp;&nbsp;&nbsp;&nbsp; </td> 
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         
                                      <td><br></td> 
                                        
                                      
                                        <td  align='left'> Modelo:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $mod; ?> &nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                       <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td  align='left'> Color:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $color; ?> </td> 
                                      
                                         

                                         
                                      <tr><td><br></td></tr>
                                    </table>
 <table align='left' style = 'font-size: 14px;    margin-right: 15px;'> 

                                  
                                         
                                        <tr align='rigth'>
                                        <td align='left' width=""> No. Serie:</td> <td><?php echo $serie; ?> </td> 
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         

                                        <td  align='left'> No. Motor:</td>  <td><?php echo $motor; ?> </td> 
                                     
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        
                                        <td  align='left'> Placa:</td> <td> <?php echo $placa; ?> </td> 
                                        

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>
                                    </table>

                                     </table>           
                            <table align='left' style = 'font-size: 14px;   margin-left: 250px; margin-top: 20px;'> 
                            <tr align='center'>
                                          <th align='center'><center> MOTIVO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                                   <table align='left' style = 'font-size: 14px;   margin-left: 0px;'> 
                                      <tr align='left'>
                                            <?php
                                            $sql1= "SELECT c.id, c.motivo, h.id_caso 
                                            FROM motivo c, caso_motivo h 
                                            where h.id_motivo= c.id and h.id_caso = '$caso'
                                             ";
                                      $rc1 = mysqli_query($mysql,$sql1);
                                        while($row = mysqli_fetch_array($rc1)){
                                          $id = $row["id"];
                                          $des = $row["motivo"];
                                            $idh =$row["id_caso"];

                                          
                                              echo"<td  align='center'>   ".utf8_encode($des)."  </td> 
                                               <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
                                          }
                                         
                                          
                                        

                                    ?>



                                        
                                         </tr>
                                        <tr><td><br></td></tr>
                                      
                                     </table>     
                                     <table align='left' style = 'font-size: 14px;   margin-left: 250px; margin-top: 20px;'> 
                            <tr align='center'>
                                          <th align='center'><center> RESULTADO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                                   <table align='left' style = 'font-size: 14px;   margin-left: -480px; margin-top: 70px;'> 
                                      <tr align='center'>
                                         <td   align='center'>El siniestro es: </td>
                                          <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                          <?php 
                                            if($res == 'Procedente'){
                                     echo" <td   align='center'> Procedente. </td>
                                    ";
                                            }   
                                              if($res == 'Rechazado'){
                                     echo" 

                                     <td   align='center'>Rechazado. </td>
                                           ";
                                            }  if($res == 'Convenio'){
                                     echo" 
                                          
                                         <td   align='center'> Convenio. </td>";
                                            }
                                          ?>
                                        
                                         </tr>
                                        <tr><td><br></td></tr>   
                                      
                                     </table>     

                                  </div >
                               

    </div><div style ='width: 22cm; margin:22px auto; height:32cm; align=center; table.auto {table-layout: auto};  margin-top: 300px;'>
  <!-- border: 1px; border-color: black; border-style: solid;-->
	    
                         <div> 
                              	
                              <br> <br>

                                                  <table align='center' style = 'font-size: 14px;  margin-top: 40px;'> 

                                                  
                                                          <tr align='center'>
                                          <th align='center'><center> DESARROLLO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> </td>
                                        </tr>
                                                     </table>
                                                  <table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 

                                                  
                                                          <tr align='center'>
                                          <th align='center'><center> DECLARACI&Oacute;N DEL ASEGURADO O CONDUCTOR VERTIDA AL AJUSTADOR.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>
                                                     </table>

                                     
        
                          <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                  
                                         <tr align='left'>
                                        <td width="20%" style="border-color: black; border-style: solid; border: 1px;"> Desarrollo Inicial:</td> 
                                        <td width="80%" style="border-color: black; border-style: solid; border: 1px;"> &nbsp;&nbsp;&nbsp;<?php echo $dec; ?> </td> 
                                            
                                         </tr>
                                      <tr>
                                          <td> <br></td>
                                        </tr>

  
                                       
                                     </table>  
                                	<table align='center' style = 'font-size: 14px;  margin-top: 80px; '> 

                                                                                  
                                                <tr align='center'>
                                              <th align='center'><center> ENTREVISTA CON EL ASEGURADO O CONDUCTOR.</center> </th>
                                                    </tr>
                                                       <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                                                                     
                                        
                                                          <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                                        <td width="20%" style="border-color: black; border-style: solid; border: 1px;"> Desarrollo de la Entrevista:</td> 
                                                                        <td width="80%" style="border-color: black; border-style: solid; border: 1px;"> &nbsp; &nbsp; &nbsp;<?php echo $ent; ?> </td> 
                                                                            
                                                                         </tr>
                                                                      <tr>
                                                                          <td> <br></td>
                                                                        </tr>

                                  
                                                                       
                                                                     </table>  
                                <table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 
                                          
                                           <tr align='center'>
                                               <th align='center'><center> RECONSTRUCCI&Oacute;N E INSPECCION EN LUGAR DE LOS HECHOS.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                                                                     
                                        
                                                          <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                 <td > Visitado: &nbsp; &nbsp;&nbsp; &nbsp;
                                                  <?php 

                                                  if($vis == 'SI'){
                                                     echo"  SI &nbsp; &nbsp;&nbsp; &nbsp;
                                                 </td>";}
                                               else{

                                                echo" 
                                                 No &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                               ";
                                               }
                                                  ?>
                                                  

                                                 
                                                 <td >&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Ubicaci&oacute;n: &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                                  <td> <?php echo $ubi; ?> </td> 
                                                                            
                                                       </tr>
                                                        
                                                       
                                    </table> 
                                      <table align='center' style = 'font-size: 14px;  margin-top: 50px; margin-left: 0px;'> 
                                     <tr align='left'>
                                              
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td >  <?php echo $ob1?> </td> 
                                                          <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                          <table align='center' style = 'font-size: 14px;  margin-top: 10px;'> 
                                          
                                           <tr align='center'>
                                               <th align='center'><center> DOCUMENTOS DE PROPIEDAD.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>
                          
                          <table align='left' style = 'font-size: 14px;   margin-left: 15px; margin-top: 15px;' > 

                                  
                                         
                                        <tr align='left'>
                                        <td align='left' width=""> Tipo de Documento:&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $doc; ?>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                         
                                               
                                        <td  align='left'> Fecha:&nbsp; &nbsp;&nbsp; &nbsp; <?php $f55 = strftime("%d de %B de %Y", strtotime($f5)); echo $f55; ?> </td> 
                                          
                                               
                                        

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>

                                      
                                    </table>
                                             <table align='left' style = 'font-size: 14px;   margin-left: 0px; margin-right: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                            <td  align='left'> Raz&oacute;n Social o Nombre del establecimiento:&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $razon; ?> &nbsp; &nbsp;&nbsp; &nbsp; </td> 
                                        <td align='left' width=""> Documento Legal: <?php echo $legal; ?> </td> 
                                        
                                        
                                       
                                               
                                         </tr> 
                                      <tr><td><br></td></tr>
                                       
                                   
                                    </table>
                                    <table align='left' style = 'font-size: 14px;  margin-left: 0px;'>
                                        <tr align='left'>
                                            <td  align='left'> Cotejado con:&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $cot; ?>&nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                            <td  align='left'> Cargo / Dpto.:&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $cargo; ?>&nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                                
                                               <td  align='left'> Tel&eacute;fono:&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $tlf; ?> </td> 
                                            
                                        </tr>
                                        <tr><td><br></td></tr>
                                        
                                    </table >

                                     <table align='left' style = 'font-size: 14px;  margin-left: 0px;'> 

                                                                  
                                                                         <tr align='left'>
                                                                      <?php     if($contact == 'Personal'){
                                                     echo"  <td > Contacto: &nbsp; &nbsp;&nbsp; &nbsp;
                                                   Personal 
                                                </td> ";}
                                               else{echo"  <td > Contacto: &nbsp; &nbsp;&nbsp; &nbsp;
                                                  
                                                 Via Fax </td> ";}
                                                ?>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                 <td >&nbsp; &nbsp;&nbsp; &nbsp; Lugar de Contacto: </td> 
                                                  <td> <?php echo $lugar; ?> </td> 
                                                  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                   <td  align='left'> Fecha:</td>  <td> <?php $f66 = strftime("%d de %B de %Y", strtotime($f6));  echo $f66; ?></td> 
                                                                            
                                                       </tr>
                                                      
                                                       
                                    </table> 
                                      
                                            <table align='center' style = 'font-size: 14px;  margin-top: 200px; margin-left: 0px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <?php echo $ob2; ?> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>                             
                                             
                            <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> PREEXISTENCIA DEL VEH&Iacute;CULO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>
                          <table align='left' style = 'font-size: 14px;   margin-left: 40px; margin-top:10px;'> 
                            <tr align='left'>
                                          <td align='center'> <p>La preexistencia del bien asegurado se verific&oacute; en: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p> </td>
                                        </tr>
                                        <tr> <td> <br>
                                        </td></tr>                                     
                          </table>

                              <table align='left' style = 'font-size: 14px;  margin-left: 0px;'> 

                                                                  
                                                                         <tr align='left'>

                                                                            <?php     if($dom == 'SI'){
                                                     echo"  <td >  Domicilio de N/A: &nbsp; &nbsp;&nbsp; &nbsp;
                                                         SI &nbsp;&nbsp;&nbsp;&nbsp;
                                                         </td> ";}
                                               else{echo"   <td >  Domicilio de N/A: &nbsp; &nbsp;&nbsp; &nbsp;
                                                        
                                                          No&nbsp;&nbsp;&nbsp;&nbsp; </td>  ";}
                                                ?>
                                                 

                                      <td > Direcci&oacute;n: &nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $dir; ?> &nbsp;&nbsp;&nbsp;&nbsp; </td> 
                                                                            
                                                      </tr>
                                                      <tr> <td> <br></td></tr>
                                                         <tr> 
                                                       <?php     if($testi == 'SI'){
                                                     echo"  <td > 
                                                                          Testigos de la Presencia del Veh&iacute;culo: &nbsp;&nbsp;&nbsp;&nbsp;
                                                         SI &nbsp;&nbsp;&nbsp;&nbsp;
                                                         </td> ";}
                                               else{echo" <td >  Testigos de la Presencia del Veh&iacute;culo: &nbsp;&nbsp;&nbsp;&nbsp;
                                                        
                                                         No &nbsp;&nbsp;&nbsp;&nbsp; </td> ";}
                                                ?>
                                             

                                                   <td>Nombre: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $name; ?> &nbsp;&nbsp;&nbsp;&nbsp; </td>
                                             

                                                                           
                                                              <td>Direcci&oacute;n o Referencia: &nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $ref; ?>&nbsp;&nbsp;&nbsp;&nbsp; </td>            
                                                                            
                                                                         </tr>
                                                                     
                                          </table>
                                           <table align='left' style = 'font-size: 14px;  margin-left: 0px;'> 
                                                    <tr>
                                                   
                                                       
                                                                         </tr>
                                  
                                                                       
                                                                     </table>  
                                                                      
                                                             <table align='center' style = 'font-size: 14px;  margin-top: 210px; margin-left: 0px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <?php echo $ob3; ?> 
                                                         </td>  
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>             
                                  <table align='left' style = 'font-size: 14px;   margin-left: 300px; margin-top: 0px;'> 
                            <tr align='center'>
                                          <th align='center'><center> VERIFICACI&Oacute;N DE P&Oacute;LIZAS.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>
                            <table align='left' style = 'font-size: 14px;  margin-left: 0px;'> 

                                                                  
                                                                         <tr align='left'>

                                                                           <?php     if($ante == 'SI'){
                                                     echo"  <td > 
                                                                        <b>  P&oacute;liza Anterior: </b> &nbsp;&nbsp;&nbsp;&nbsp;
                                                         SI  &nbsp;&nbsp;&nbsp;&nbsp;
                                                         </td>  ";}
                                               else{echo"    <td > 
                                                                        <b>  P&oacute;liza Anterior: </b> &nbsp;&nbsp;&nbsp;&nbsp;
                                                         
                                                          No &nbsp;&nbsp;&nbsp;&nbsp;</td> ";}
                                                ?>
                                               

                                                             <?php     if($cob2 == 'Amplia'){
                                                     echo" <td>  <b>&nbsp;&nbsp; Cobertura: </b> &nbsp;&nbsp;&nbsp;&nbsp;
                                                         Amplia &nbsp;&nbsp;&nbsp;&nbsp; </td>  ";}
                                                         if($cob2 == 'Limitada'){
                                                     echo"  <td>   <b>&nbsp;&nbsp; Cobertura: </b> &nbsp;&nbsp;&nbsp;&nbsp;
                                                         
                                                          Limitada &nbsp;&nbsp;&nbsp;&nbsp;</td>  ";}
                                                         if($cob2 == 'Otra'){
                                                     echo"  <td>  <b>&nbsp;&nbsp; Cobertura: </b> &nbsp;&nbsp;&nbsp;&nbsp;
                                                        
                                                         Otra &nbsp;&nbsp;&nbsp;&nbsp; </td>  ";}
                                               
                                                ?>
                                                                       
                                                                            
                                                                         </tr>
                                                                         <tr> <td> <br></td></tr>
                                                                           <tr align='left'>
                                                      	 <td > Vigencia Desde:&nbsp;&nbsp;&nbsp;&nbsp; <?php $f77 = strftime("%d de %B de %Y", strtotime($f7)); echo $f77; ?>&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                                         
                                        <td > Hasta:&nbsp;&nbsp;&nbsp;&nbsp; <?php $f88 = strftime("%d de %B de %Y", strtotime($f8)); echo $f88; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                        
                                                                         </tr>
                                                                       </table>
                                         <table align='center' style = 'font-size: 14px;  margin-top: 150px; margin-left: 0px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td >    <?php echo $ob4; ?> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>   

                                           <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> CARPETA DE INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>

                          	  <table align='left' style = 'font-size: 14px;  margin-left: 0px;'> 
                                                                           <tr>
                                  <td>Denuncia ante el Ministerio P&uacute;blico: </td>
                                     <td> <?php echo $min; ?> </td>
                                     <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                               <td align="left">&nbsp; Alcald&iacute;a o Municipio:  </td>
                                    <td> <?php echo $alcal; ?> </td> 
                                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td align="left">&nbsp; Carpeta:  </td>
                                         <td> <?php echo $c1; ?> </td>     
                                                                         </tr>
                                  <tr><td><br></td></tr>
                                                                       
                                                                     </table> 


                                      <table align='left' style = 'font-size: 14px;  margin-left: 0px;'> 
                                                   <tr>
                                                                           
                                             <td align="left">&nbsp; Fecha:  </td><td> <?php $f99 = strftime("%d de %B de %Y", strtotime($f9)); echo $f99; ?> </td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                             
                                                <td align="left">&nbsp; Hora:  </td>
                                              <td> <?php echo $hora; ?> </td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                   
 <?php
                                                                             if($regis == 'SI'){
                                                     echo"   <td > 
                                                                        <b>  Registrada: </b> &nbsp;
                                                         SI </td>   ";} 
                                                         else{echo"
                                                          <td > 
                                                                        <b>  Registrada: </b> &nbsp;
                                                         No  </td> ";
                                                         }?>

                                                                         </tr>
                                  
                                                                       <tr><td><br></td></tr>
                                                                     </table>  
 <table align='left' style = 'font-size: 14px;  margin-left: 0px; margin-top: 0px;'> 
                                                                           <tr>
                                                                             
                   <td > 
                        <td align="left">&nbsp; Carpeta:  </td>
                             <td> <?php echo $c2; ?> </td>
                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                  <td align="left">&nbsp; Motivo Carpeta Relacionada:  </td>
                                             <td> <?php echo $mot; ?> </td>
                                                                           
                                                                         </tr>
                                  
                                                                       
                                                                     </table>  




                              		</div >
		</div>
		<div style ='width: 22cm; margin:22px auto; height:32cm; align=center; table.auto {table-layout: auto};  margin-top: 400px;'>
  <!-- border: 1px; border-color: black; border-style: solid;-->
	    
                         <div> 
                              	
                              <br> <br>

                                                  <table align='center' style = 'font-size: 14px;  margin-top: 10px;'> 

                                                  
                                                          <tr align='center'>
                                          <th align='center'><center> DESARROLLO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> </td>
                                        </tr>
                                                     </table>
                                                 <table align='center' style = 'font-size: 14px;  margin-top: 20px; margin-left: 0px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td >  <?php echo $ob5; ?> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>   
                                     
        
                         
                                	<table align='center' style = 'font-size: 14px;  margin-top: 20px;'> 

                                                                                  
                                                                                          <tr align='center'>
                                                                          <th align='center'><center> DOCUMENTOS ANEXOS.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>
                                      <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                            <tr align='left'>
                                          <td align='center'> <p>Documentos que se anexan a la investigaci&oacute;n: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p> </td>
                                        </tr>
                                        <tr>
                                        	<td><br></td>
                                        </tr>
                                     
                          </table>

                                                                     
                                        
                       <table align='left' style = 'font-size: 14px; margin-top: 40px; margin-left: 0px;'> 

                                                                  
                                    <?php
                                            $sql1= "SELECT c.id, c.documento, h.id_caso 
                                            FROM documentos c , docu_caso h
                                             where h.id_doc= c.id and h.id_caso = '$caso'";
                                      $rc1 = mysqli_query($mysql,$sql1);
                                        while($row = mysqli_fetch_array($rc1)){
                                          $id = $row["id"];
                                          $des = $row["documento"];
                                            $idh =$row["id_caso"];

                                        
                                              echo"
                                                 <tr align='left'> <th > ".utf8_encode($des)." </th> </tr>";
                                             
                                          
                                          }
                                          ?>



                                 

                             <tr>
                              <td> <br></td>
                              </tr>                     
                                 </table>  
                                <table align='center' style = 'font-size: 14px;  margin-top: 230px; margin-left: 350px;'> 
                                          
                                           <tr align='center'>
                                               <th align='center'><center> CONCLUSIONES</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                                                                     
                                        
                 <table align='left' style = 'font-size: 14px; margin-top: 0px; margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                 <th> Resultado del Siniestro: &nbsp; &nbsp;&nbsp; &nbsp; </th>
                                                 <?php 
                                            if($res == 'Procedente'){
                                     echo" <td   align='center'> Procedente. </td>
                                    ";
                                            }   
                                              if($res == 'Rechazado'){
                                     echo" 

                                     <td   align='center'>Rechazado. </td>
                                           ";
                                            }  if($res == 'Convenio'){
                                     echo" 
                                          
                                         <td   align='center'> Convenio. </td>";
                                            }
                                          ?>
                                              
                                                
                                                                            
                                                       </tr>
                                                        
                                                       
                                    </table> 

                   <table align='left' style = 'font-size: 14px;  margin-right: 35px; margin-left: 20px; margin-top: 20px;'> 

                                  
                                          <tr align='justify'>
                                        <td > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por lo anterior, el presente siniestro resulta procedente toda vez que no se puede comprobar de manera fehaciente que el robo haya ocurrido en el periodo al descubierto, no encontrando para ello ning&uacute;n indicio que pudiera hacer creer o pensar mediante dicho o documentales que hubieran sido susceptibles de investigaci&oacute;n. </p> </td> 
                                            
                                         </tr>
                                      <tr>
                                          <td> <br></td>
                                        </tr>
  										 <tr align='justify'>
                                        <td > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sin m&aacute;s por el momento reciba un afectuoso saludo, no sin antes reiterarle que quedo a sus órdenes para cualquier aclaraci&oacute;n al respecto. </p> </td>  
                                       <tr>
                                          <td> <br></td>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr> 
                                        </table>
                                        <table  align='center' style = 'font-size: 14px;  margin-right: 35px; margin-left: 250px; margin-top: 20px;'>
                                        
                                         <tr align='justify'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Atentamente. </p> </th> 
                                       <tr>
                                       
                                       
                                      <tr>
                                          <td> <br></td>
                                        </tr>
                                         <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Licenciado. C&eacute;sar Qui&ntilde;ones G. </p> </th> 
                                       </tr> <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Director Operativo. </p> </th>  </tr>
                                       <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asesor&iacute;a Legal Especializada e Investigaciones S.C. </p> </th> 
                                       </tr> <tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cquinones@alesi.org.mx </p> </th> 
                                       </tr><tr align='center'>
                                        <th > <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; alesi.sc@prodigy.net.mx</p> </th> 
                                       </tr>
                                       <tr>  <td> <br> <br></td> </tr>


                                     </table>  

                              		</div >
                              	<!--	<input type="submit" class="btn btn-danger" value="Guardar" required = '' style="margin-left: 350px; margin-top: 50px;"> -->
		</div>


</form>
	
