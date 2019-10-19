<?php 
include ("conecto.php");
session_start();
if (!isset($_SESSION["id"])){
header('location:index.html');

}
$caso = $_GET["caso"];
$v = $_GET["v"];
$ff = date("Y-m-d H:i:s");
//echo "$ff";
if($v != '1'){
$yoko = "UPDATE  caso SET fecha_usu  = '$ff' where id = '$caso'";
$res = mysqli_query($mysql,$yoko) or die(mysqli_error()); 
//echo "holaaass";
}



                $sql1= "select * from caso where id = '$caso'";
                    $rc1 = mysqli_query($mysql,$sql1);
                      while($row = mysqli_fetch_array($rc1)){
                        $id = $row["id"];
                        $sini = $row["siniestro"]; $f1 = $row["fecha_sini"]; $f2 = $row["fecha_report"];
                        $pol = $row["poliza"]; $f0 = $row["fec_crea"]; $f3 = $row["ini_vigencia"];  $f4 = $row["fin_vigencia"];
                        $cob = $row["cobertura"]; $aseg = $row["asegurado"];$cond = $row["conductor"];
                   $inci = $row["inciso"]; $id1 = $row["id_marca"]; $tip = $row["tipo"]; $mod = $row["modelo"]; $color = $row["color"];$serie = $row["nro_serie"];$motor = $row["nro_motor"];$placa = $row["placa"];$res = $row["resul"];$dec = $row["decla_aseg"];$ent = $row["entrevista"];$vis = $row["visitado"];$ubi = $row["ubicacion"];
                   $ob1 = $row["observacion"];$doc = $row["documento"];$f5 = $row["fec_doc"];$razon = $row["razon_social"];$legal = $row["legal"];$cot = $row["cotejado"]; $cargo = $row["cargo"];
                   $tlf = $row["tlf"];$contact = $row["contacto"];$lugar = $row["lugar"];$f6 = $row["fec_contact"];$ob2 = $row["obs_contact"];$dom = $row["domicilio"];$dir = $row["direccion"];
                   $testi = $row["testigo"];$name = $row["nombre"];$ref = $row["referencia"];$ob3 = $row["obsert"];$ante = $row["poliza_ante"];$cob2 = $row["cobertura2"];$f7 = $row["vdesde"];$f8 = $row["vhasta"];$ob4 = $row["obserp"];$min = $row["ministerio"];$alcal = $row["alcaldia"];$c1 = $row["carpeta"];$f9 = $row["fec_carpeta"];$hora = $row["hora"];$regis = $row["registrada"];$c2 = $row["carpeta2"];$mot = $row["motivo"];$ob5 = $row["obsr5"];
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

<div style ='width: 22cm; margin:22px auto; height:29.7cm; align=center; table.auto {table-layout: auto};  '>
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
                                                        <td align='right'> <input type="text" name="refint"  class= 'form-control mb-6' value = "<?php echo $dirigi3;?>" required = ''> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  </b></p> </td> </td> 
                                                            
                                                         </tr>
                  
                                                       
                                                     </table>

                                      <table align='left' style = 'font-size: 14px;  margin-top: 40px;margin-left: 20px;'> 

                                  
                                         <tr align='left'>
                                         
                                             
                                        <td > <p> <b> <?php echo $desl;?> </b></p> </td> 
                                            
                                         </tr>
                                          <tr align='left'> 
                                        <td align='left'> <input type="text" name="dirig"  class= 'form-control' size = '30' value = "<?php echo $dirigi;?>" > </td> 
                                            
                                         </tr> <tr align='left'>
                                        <td > <input type="text" name="dirig2"  class= 'form-control' size = '30' value = "<?php echo $dirigi1;?>" > </td> 
                                            
                                         </tr>
                                          <tr align='left'> 
                                        <td align='left'> <p> <b>Presente.</b></p> </td> </td> 
                                            
                                         </tr>
  
                                       
                                     </table>
         <table align='right' style = 'font-size: 14px;  margin-top: 20px;  ' > 

                                  
                                         <tr align='right'>
                                        <td align='right'> <p> <b>Asunto: <input type="text" name="dirig22"  value = "<?php echo $dirigi2;?>" class= 'form-control' placeholder = 'Asunto' required = '' size = '50'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</b></p> </td> </td> 
                                            
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


                         
                          <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> DATOS DEL SINIESTRO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>
                          <table align='left' style = 'font-size: 14px;   margin-left: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> No. Siniestro:</td> <td> <input type="text" name="nsin" value = "<?php echo $sini; ?>" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Fecha del Siniestro:</td>  <td> <input type="date" name="fsin" value = "<?php echo $f1; ?>" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Fecha del Reporte:</td> <td> <input type="date" name="frep" value = "<?php echo $f2; ?>" style="border-radius: 5px;" > </td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>

                                       <tr align='left'>
                                        <td align='right' width=""> No. de P&oacute;liza:</td> <td> <input type="text" name="pol" value = "<?php echo $pol; ?>" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Inciso:</td>  <td> <input type="text" name="inci"  value = "<?php echo $inci; ?>" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Inicio Vigencia:</td> <td> <input type="date" name="ivig" value = "<?php echo $f3; ?>" style="border-radius: 5px;" > </td> 
                                      </tr>
                                      <tr><td><br></td></tr>
                                    </table>

                                      
                                      <table align='left' style = 'font-size: 14px;   margin-left: 0px;'> 
                                      <tr align='left'>
                                         <td  align='right'> &nbsp;&nbsp;&nbsp;&nbsp;T&eacute;rmino Vigencia:</td> <td> <input type="date" name="fvig"  value = "<?php echo $f4; ?>" style="border-radius: 5px;" > </td> 
                                         <td  align='right'>&nbsp;&nbsp; Cobertura:</td> <td> <input type="text" name="cober" value = "<?php echo $cob; ?>" style="border-radius: 5px;" > </td> 

                                            
                                         </tr>
                                        <tr><td><br></td></tr>
                                      <tr align='left'  >
                                         <td  align='right'> Nombre del Asegurado:</td> <td> <input type="text" name="aseg" value = "<?php echo $aseg; ?>" style="border-radius: 5px;"  > &nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                         <td  align='right' >&nbsp;&nbsp; Nombre del Conductor:</td> <td> <input type="text" name="conduce" value = "<?php echo $cond; ?>" style="border-radius: 5px;"  > </td> 

                                            
                                         </tr>
                                      
                                         <tr><td><br></td></tr>
                                       
                                     </table>   
                                        <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                                      <tr align='left'>
                                         <td  align='left'> <b>Tipo de siniestro </b> &nbsp; Robo:</td> 
                                  <?php
                                            $sql1= "SELECT c.id, c.tipo, h.id_caso FROM tipo_siniestro c
                                             LEFT OUTER JOIN caso_tiposini h ON h.id_tiposini= c.id and h.id_caso = '$caso'";
                                      $rc1 = mysqli_query($mysql,$sql1);
                                        while($row = mysqli_fetch_array($rc1)){
                                          $id = $row["id"];
                                          $des = $row["tipo"];
                                            $idh =$row["id_caso"];

                                          if($idh != $caso){
                                              echo"<td  align='right'> <input type='checkbox' name='tiposin[]' value='$id' >  ".utf8_encode($des)."&nbsp;&nbsp;&nbsp;&nbsp;  </td> ";
                                          }
                                          else{
                                            echo"<td align='right'> <input type='checkbox' name='tiposin[]' value='$id' checked > ".utf8_encode($des)." &nbsp;&nbsp;&nbsp;&nbsp; </td>";
                                          }
                                          
                                        

                                      //echo"<tr><td> <input type='checkbox' name='comodidades[]' value='$id'> <i class= '$icono'></i> ".utf8_encode($des)."  </td> </tr>";
                                            
                                          }
                                    ?>
                                    </tr>
                                    <tr align='left'>

                                         <td  align='left'>  Otros:</td> <td> <input type="text" name="otro"style="border-radius: 5px;"  > </td> 

                                            
                                         </tr>
                                        <tr><td><br></td></tr>
                                      
                                     </table>           
                            <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> DATOS DEL VEH&Iacute;CULO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                            <table align='left' style = 'font-size: 14px;   margin-left: 15px; margin-right: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> Marca:&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                        <td> <select name ="marca"  style="border-radius: 5px;">
								
                                        	<?php 
                                        		$sql= "select * from marca where id = $id1";
										$rc = mysqli_query($mysql,$sql);
											if($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$marca = $row["marca"];
										echo"<option value='$id'>".utf8_encode($marca)."</option>";
                  }
                        $sql4= "select * from marca ";
                    $rc4 = mysqli_query($mysql,$sql4);
                      while($row = mysqli_fetch_array($rc4)){
                        $id = $row["id"];
                        $marca = $row["marca"];
                    echo"<option value='$id'>".utf8_encode($marca)."</option>";
											}
                                        	?>
                                         </td> 
                                        <td  align='right'> Tipo:&nbsp;&nbsp;&nbsp;&nbsp;</td>  <td> <input type="text" name="tipov" value = "<?php echo $tip; ?>" style="border-radius: 5px;" >&nbsp;&nbsp;&nbsp;&nbsp; </td> 
                                         </tr> 
                                      <tr><td><br></td></tr>
                                      <tr align='left'>
                                        <td  align='right'> Modelo:&nbsp;&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="modelo" value = "<?php echo $mod; ?>" style="border-radius: 5px;" >&nbsp;&nbsp;&nbsp;&nbsp; </td> 
                                        <td  align='right'> Color:&nbsp;&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="color" value = "<?php echo $color; ?>" style="border-radius: 5px;" > &nbsp;&nbsp;&nbsp;&nbsp;</td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>
                                    </table>
 <table align='left' style = 'font-size: 14px;   margin-left: 15px; margin-right: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> No. Serie:&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="serie"  value = "<?php echo $serie; ?>" style="border-radius: 5px;" >&nbsp;&nbsp;&nbsp; </td> 
                                        <td  align='right'> No. Motor:&nbsp;&nbsp;&nbsp;</td>  <td> <input type="text" name="motor" value = "<?php echo $motor; ?>" style="border-radius: 5px;" > &nbsp;&nbsp;&nbsp;</td> 
                                        <td  align='right'> Placa:&nbsp;&nbsp;&nbsp;</td> <td> <input type="text" name="placa" value = "<?php echo $placa; ?>" style="border-radius: 5px;" > &nbsp;&nbsp;&nbsp;</td> 
                                        

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>
                                    </table>

                                     </table>           
                            <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> MOTIVO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                                   <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                                      <tr align='left'>
                                            <?php
                                            $sql1= "SELECT c.id, c.motivo, h.id_caso FROM motivo c
                                             LEFT OUTER JOIN caso_motivo h ON h.id_motivo= c.id and h.id_caso = '$caso'
                                             limit 0,4";
                                      $rc1 = mysqli_query($mysql,$sql1);
                                        while($row = mysqli_fetch_array($rc1)){
                                          $id = $row["id"];
                                          $des = $row["motivo"];
                                            $idh =$row["id_caso"];

                                          if($idh != $caso){
                                              echo"<td  align='center'> <input type='checkbox' name='motivo[]' value='$id'>  ".utf8_encode($des)."  </td> ";
                                          }
                                          else{
                                            echo"<td align='center'> <input type='checkbox' name='motivo[]' value='$id' checked > ".utf8_encode($des)."  </td>";
                                          }
                                          
                                        

                                      //echo"<tr><td> <input type='checkbox' name='comodidades[]' value='$id'> <i class= '$icono'></i> ".utf8_encode($des)."  </td> </tr>";
                                            
                                          }
                                    ?>






                                      		<?php 
                                        	/*	$sql= "select * from motivo limit 0,4 ";
										$rc = mysqli_query($mysql,$sql);
											while($row = mysqli_fetch_array($rc)){
												$id = $row["id"];
												$motivo = $row["motivo"];
										//echo" <td  align='right'><input type='checkbox' name='motivo[]' value='$id'> $tipo </td>";
										echo"<td  align='center'><input type='checkbox' name='motivo[]' value='$id'> ".utf8_encode($motivo)." </td>";
											}*/
												?>


                                         </tr>
                                        <tr><td><br></td></tr>   
                                        <tr align='left'>
                                        	<?php
                                            $sql1= "SELECT c.id, c.motivo, h.id_caso FROM motivo c
                                             LEFT OUTER JOIN caso_motivo h ON h.id_motivo= c.id and h.id_caso = '$caso'
                                             limit 4,8";
                                      $rc1 = mysqli_query($mysql,$sql1);
                                        while($row = mysqli_fetch_array($rc1)){
                                          $id = $row["id"];
                                          $des = $row["motivo"];
                                            $idh =$row["id_caso"];

                                          if($idh != $caso){
                                              echo"<td  align='center'> <input type='checkbox' name='motivo[]' value='$id'>  ".utf8_encode($des)."  </td> ";
                                          }
                                          else{
                                            echo"<td align='center'> <input type='checkbox' name='motivo[]' value='$id' checked > ".utf8_encode($des)."  </td>";
                                          }
                                          
                                        

                                      //echo"<tr><td> <input type='checkbox' name='comodidades[]' value='$id'> <i class= '$icono'></i> ".utf8_encode($des)."  </td> </tr>";
                                            
                                          }
                                    ?>
                                        
                                         </tr>
                                        <tr><td><br></td></tr>
                                      
                                     </table>     
                                     <table align='left' style = 'font-size: 14px;   margin-left: 300px;'> 
                            <tr align='center'>
                                          <th align='center'><center> RESULTADO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td>
                                        </tr>

                          </table>

                                   <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                                      <tr align='center'>
                                         <td   align='center'>El siniestro es: </td>
                                          <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                          <?php 
                                            if($res == 'Procedente'){
                                     echo" <td   align='center'><input type='radio' name='sinies' value='Procedente' checked> Procedente. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>

                                     <td   align='center'><input type='radio' name='sinies' value='Rechazado'>Rechazado. &nbsp;&nbsp;&nbsp;&nbsp; </td>
                                           <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td   align='center'><input type='radio' name='sinies' value='Convenio'> Convenio. &nbsp;&nbsp; </td>";
                                            }   
                                              if($res == 'Rechazado'){
                                     echo" <td   align='center'><input type='radio' name='sinies' value='Procedente' > Procedente. </td>

                                     <td   align='center'><input type='radio' name='sinies' value='Rechazado' checked >Rechazado. </td>
                                           <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td   align='center'><input type='radio' name='sinies' value='Convenio'> Convenio. </td>";
                                            }  if($res == 'Convenio'){
                                     echo" <td   align='center'><input type='radio' name='sinies' value='Procedente' > Procedente. </td>

                                     <td   align='center'><input type='radio' name='sinies' value='Rechazado' checked >Rechazado. </td>
                                           <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                         <td   align='center'><input type='radio' name='sinies' value='Convenio' checked > Convenio. </td>";
                                            }
                                          ?>
                                        
                                         </tr>
                                        <tr><td><br></td></tr>   
                                      
                                     </table>     

                                  </div >
                               

    </div><div style ='width: 22cm; margin:22px auto; height:32cm; align=center; table.auto {table-layout: auto};  margin-top: 400px;'>
  <!-- border: 1px; border-color: black; border-style: solid;-->
	    
                         <div> 
                              	
                              

                                                  <table align='center' style = 'font-size: 14px;  margin-top: 10px;'> 

                                                  
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
                                        <td width="80%" style="border-color: black; border-style: solid; border: 1px;"> <textarea name="desarrollo" class='form-control' rows = '3' cols="80"><?php echo $dec; ?></textarea> </td> 
                                            
                                         </tr>
                                      <tr>
                                          <td> <br></td>
                                        </tr>

  
                                       
                                     </table>  
                                	<table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 

                                                                                  
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
                                                                        <td width="80%" style="border-color: black; border-style: solid; border: 1px;"> <textarea name="entrevista" class='form-control' rows = '3' cols="80"><?php echo $ent; ?></textarea> </td> 
                                                                            
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
                                                     echo" <input type='radio' name='visitado' value='SI' checked > SI &nbsp; &nbsp;&nbsp; &nbsp;
                                                <input type='radio' name='visitado' value='NO'> No &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                               <td> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </td>";}
                                               else{

                                                echo" <input type='radio' name='visitado' value='SI'  > SI &nbsp; &nbsp;&nbsp; &nbsp;
                                                <input type='radio' name='visitado' value='NO'checked > No &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                               <td> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </td>";
                                               }
                                                  ?>
                                                 
                                                 <td > Ubicaci&oacute;n &nbsp; &nbsp;&nbsp; &nbsp;</td> 
                                                  <td><textarea  name="ubica" class='form-control' rows = '2' cols="60"> <?php echo $ubi; ?></textarea>  </td> 
                                                                            
                                                       </tr>
                                                        
                                                       
                                    </table> 
                                      <table align='center' style = 'font-size: 14px;  margin-top: 80px;'> 
                                     <tr align='left'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ" class='form-control' rows = '2' cols="80"> <?php echo $ob1?></textarea> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>

                          <table align='center' style = 'font-size: 14px;  margin-top: 0px;'> 
                                          
                                           <tr align='center'>
                                               <th align='center'><center> DOCUMENTOS DE PROPIEDAD.</center> </th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>
                          
                          <table align='left' style = 'font-size: 14px;   margin-left: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> Tipo de Documento:</td> <td> <input type="text" name="doc"  value = "<?php echo $doc; ?>" style="border-radius: 5px;" >&nbsp; &nbsp; </td> 
                                        <td  align='right'> Fecha:</td>  <td> <input type="date" name="fecdoc"  value = "<?php echo $f5; ?>" style="border-radius: 5px;" >&nbsp; &nbsp; </td> 
                                        <td  align='right'> Raz&oacute;n Social o Nombre del establecimiento:</td> <td> <input type="text"  value = "<?php echo $razon; ?>" name="razon"style="border-radius: 5px;" > </td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>

                                      
                                    </table>
                                             <table align='left' style = 'font-size: 14px;   margin-left: 15px; margin-right: 15px;'> 

                                  
                                         
                                        <tr align='left'>
                                        <td align='right' width=""> Documento Legal:</td> <td> <input type="text"   value = "<?php echo $legal; ?>" name="legal" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> Cotejado con:</td>  <td> <input type="text" name="cotejo"   value = "<?php echo $cot; ?>" style="border-radius: 5px;" > </td> 
                                         </tr> 
                                      <tr><td><br></td></tr>
                                       <tr align='left'>
                                        <td  align='right'> Cargo / Dpto.:</td> <td> <input type="text" name="cargo"  value = "<?php echo $cargo; ?>" style="border-radius: 5px;" > </td> 
                                        <td  align='right'> T&eacute;lefono:</td> <td> <input type="text"  value = "<?php echo $tlf; ?>" name="tlf"style="border-radius: 5px;" > </td> 

                                            
                                         </tr> 
                                      <tr><td><br></td></tr>
                                    </table>

                                     <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>
                                                                      <?php     if($contact == 'Personal'){
                                                     echo"  <td > Contacto: &nbsp; &nbsp;&nbsp; &nbsp;
                                                  <input type='radio' name='contacto' value='Personal' checked > Personal 
                                                <input type='radio' name='contacto' value='Fax'> Otro Medio </td> ";}
                                               else{echo"  <td > Contacto: &nbsp; &nbsp;&nbsp; &nbsp;
                                                  <input type='radio' name='contacto' value='Personal'> Personal 
                                                <input type='radio' name='contacto' value='Fax' checked > Otro Medio </td> ";}
                                                ?>
                                                 
                                             <!-- <td> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </td> -->
                                                
                                                <!--  <td> <input type="text" name="lugar" value = "<?php //echo $lugar; ?>" style="border-radius: 5px;" > </td> -->
                                                   <td  align='right'>&nbsp; &nbsp;&nbsp; &nbsp; Fecha:</td>  <td> <input type="date" value = "<?php echo $f6; ?>" name="feccontacto" style="border-radius: 5px;" > </td> 
                                                                            
                                                       </tr>
                                                       <tr align='left'> 
                                                       <td> &nbsp; &nbsp;&nbsp; &nbsp; Lugar de Contacto:  <textarea  name="lugar"class='form-control' rows = '1' cols="40"> <?php echo $lugar; ?></textarea> </td>
                                                       </tr>
                                                      
                                                       
                                    </table> 
                                      
                                            <table align='center' style = 'font-size: 14px;  margin-top: 320px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ2" class='form-control' rows = '2' cols="80"><?php echo $ob2; ?></textarea> </td> 
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>                             
                                             
                            <table align='left' style = 'font-size: 14px;   margin-left: 300px; margin-top: 10px;'> 
                            <tr align='center'>
                                          <th align='center'><center> PREEXISTENCIA DEL VEH&Iacute;CULO.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>
                          <table align='left' style = 'font-size: 14px;   margin-left: 40px;'> 
                            <tr align='left'>
                                          <td align='center'> <p>La preexistencia del bien asegurado se verific&oacute; en: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p> </td>
                                        </tr>
                                     
                          </table>

                              <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>

                                                                            <?php     if($dom == 'SI'){
                                                     echo"  <td >  Domicilio de N/A: &nbsp; &nbsp;&nbsp; &nbsp;
                                                        <input type='radio' name='domicilio1' value='SI' checked > SI &nbsp; &nbsp;&nbsp; &nbsp;
                                                         <input type='radio' name='domicilio1' value='NO'> No &nbsp; &nbsp;&nbsp; &nbsp;</td> ";}
                                               else{echo"   <td >  Domicilio de N/A: &nbsp; &nbsp;&nbsp; &nbsp;
                                                        <input type='radio' name='domicilio1' value='SI'  > SI &nbsp; &nbsp;&nbsp; &nbsp;
                                                         <input type='radio' name='domicilio1' value='NO' checked> No &nbsp; &nbsp;&nbsp; &nbsp;</td>  ";}
                                                ?>


                                                                        <td > Direcci&oacute;n: &nbsp; &nbsp;</td><td> <textarea name="dirdom"  class='form-control' rows = '2' cols="60"> <?php echo $dir; ?></textarea> </td> 
                                                                            
                                                                         </tr>
                                                                         </table>
                                                       <table align='left' style = 'font-size: 14px;  margin-left: 20px; margin-top: 10px;'>
                                                                         <tr align='left'> 
                                                       <?php     if($testi == 'SI'){
                                                     echo"  <td align='left' >Testigos de la Presencia del Veh&iacute;culo: 
                                                        <input type='radio' name='vehiculo2' value='SI' checked > SI &nbsp;
                                                         <input type='radio' name='vehiculo2' value='NO'> No</td> ";}
                                                         
                                               else{echo" <td >Testigos de la Presencia del Veh&iacute;culo: &nbsp;
                                                        <input type='radio' name='vehiculo2' value='SI'> SI &nbsp;
                                                         <input type='radio' name='vehiculo2' value='NO' checked > No</td> ";}
                                                ?>
                                                <td> </td>

                                                                      
                                                                         </tr>
                                                                     
                                                                      </table>
                                                                       <table align='left' style = 'font-size: 14px;  margin-left: 20px; margin-top: 10px;'> 
                                                                           <tr>
                                                                           <td>Nombre: </td>
                                                                            <td> <input type="text" name="ncontacto" value = "<?php echo $name; ?>" style="border-radius: 5px;" > </td>
                                                                              <td> &nbsp; &nbsp; &nbsp; &nbsp;Direcci&oacute;n o Referencia: &nbsp; &nbsp; </td>
                                                                           <td> <textarea name="dircontact" class='form-control' rows = '2' cols="56"><?php echo $ref; ?></textarea> </td> 
                                                                         </tr>
                                  
                                                                       
                                                                     </table>  
                                                                      
                                                             <table align='center' style = 'font-size: 14px;  margin-top: 280px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ3" class='form-control' rows = '2' cols="80"> <?php echo $ob3; ?></textarea> 
                                                          <input type="hidden" name="empaseg" value ="<?php echo $caso;?>"></td>  
                                                          <input type="hidden" name="perusu1" value ="<?php echo $v;?>"></td>  
                                                         </tr> <tr>
                                                                          <td> <br></td>
                                                                        </tr>
                                                                                     </table>             
                                  <table align='left' style = 'font-size: 14px;   margin-left: 300px; margin-top:10px;'> 
                            <tr align='center'>
                                          <th align='center'><center> VERIFICACI&Oacute;N DE P&Oacute;LIZAS.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> <br></td> </tr>
                                         

                          </table>
                            <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 

                                                                  
                                                                         <tr align='left'>

                                                                           <?php     if($ante == 'SI'){
                                                     echo"  <td > 
                                                                        <b>  P&oacute;liza Anterior: </b> &nbsp;
                                                        <input type='radio' name='polk' value='SI' checked> SI &nbsp; 
                                                         <input type='radio' name='polk' value='NO'> No &nbsp; </td>  ";}
                                               else{echo"    <td > 
                                                                        <b>  P&oacute;liza Anterior: </b> &nbsp;
                                                        <input type='radio' name='polk' value='SI'> SI &nbsp; 
                                                         <input type='radio' name='polk' value='NO' checked> No &nbsp; </td> ";}
                                                ?>

                                                             <?php     if($cob2 == 'Amplia'){
                                                     echo" <td>  <b>&nbsp;&nbsp; Cobertura: </b> &nbsp;
                                                        <input type='radio' name='cober2' value='Amplia' checked> Amplia &nbsp; 
                                                         <input type='radio' name='cober2' value='Limitada'> Limitada &nbsp; 
                                                         <input type='radio' name='cober2' value='Otra'> Otra &nbsp; </td>  ";}
                                                         if($cob2 == 'Limitada'){
                                                     echo"  <td>   <b>&nbsp;&nbsp; Cobertura: </b> &nbsp;
                                                        <input type='radio' name='cober2' value='Amplia'> Amplia &nbsp; 
                                                         <input type='radio' name='cober2' value='Limitada' checked> Limitada &nbsp; 
                                                         <input type='radio' name='cober2' value='Otra'> Otra &nbsp; </td>  ";}
                                                         if($cob2 == 'Otra'){
                                                     echo"  <td>  <b>&nbsp;&nbsp; Cobertura: </b> &nbsp;
                                                        <input type='radio' name='cober2' value='Amplia'> Amplia &nbsp; 
                                                         <input type='radio' name='cober2' value='Limitada'> Limitada &nbsp; 
                                                         <input type='radio' name='cober2' value='Otra' checked> Otra &nbsp; </td>  ";}
                                               
                                                ?>
                                                                       
                                                                            
                                                                         </tr>
                                                                           <tr align='left'>
                                                                         	 <td > Vigencia Desde:</td>  <td> <input type="date" value = "<?php echo $f7; ?>" name="vdsd" style="border-radius: 5px;" > </td>
                                                         <td > Hasta:</td>  <td> <input type="date" name="vhst" value = "<?php echo $f8; ?>" style="border-radius: 5px;" > </td> 
                                                                         </tr>
                                                                       </table>
                                         <table align='center' style = 'font-size: 14px;  margin-top: 120px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ4" class='form-control' rows = '2' cols="80"><?php echo $ob4; ?></textarea> </td> 
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

                          	  <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                           <tr>
                                                                           <td>Denuncia ante el Ministerio P&uacute;blico: </td>
                                                                            <td> <input type="text" name="ministerio" value = "<?php echo $min; ?>" style="border-radius: 5px;" > </td>
                                                                              <td align="rigth">&nbsp; Alcald&iacute;a o Municipio:  </td>
                                                                           <td> <input type="text" name="alcaldia" value = "<?php echo $alcal; ?>" style="border-radius: 5px;" > </td> 
                                                                          
                                                                         </tr>
                                  
                                                                       
                                                                     </table> 


                                                                       <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                           <tr>
                                                                           <td align="rigth">&nbsp; Carpeta:  </td>
                                                                           <td> <input type="text" name="carpeta" value = "<?php echo $c1; ?>" style="border-radius: 5px;" > </td>
                                                                           <td align="rigth">&nbsp; Fecha:  </td>
                                                                           <td> <input type="date" name="fcarpeta" value = "<?php echo $f9; ?>" style="border-radius: 5px;" > </td>
                                                                           <td align="rigth">&nbsp; Hora:  </td>
                                                                           <td> <input type="text" name="horas" value = "<?php echo $hora; ?>" style="border-radius: 5px;" > </td>
                                                                   
                                                                         </tr>
                                  
                                                                       
                                                                     </table>  
 <table align='left' style = 'font-size: 14px;  margin-left: 20px;'> 
                                                                           <tr>
                                                                              <?php
                                                                             if($regis == 'SI'){
                                                     echo"   <td > 
                                                                        <b>  Registrada: </b> &nbsp;
                                                        <input type='radio' name='regis' value='SI' checked> SI &nbsp; 
                                                         <input type='radio' name='regis' value='NO'> No</td>   ";} 
                                                         else{echo"
                                                          <td > 
                                                                        <b>  Registrada: </b> &nbsp;
                                                        <input type='radio' name='regis' value='SI'> SI &nbsp; 
                                                         <input type='radio' name='regis' value='NO' checked> No</td> ";
                                                         }?>
                                                                           	       
                                                                        <td > 
                                                                           <td align="rigth">&nbsp; Carpeta: &nbsp; </td>
                                                                           <td> <input type="text" name="carpeta2" value = "<?php echo $c2; ?>" style="border-radius: 5px;" >&nbsp; </td>
                                                                           </tr>
                                                                           <tr>
                                                                           <td align="rigth">&nbsp; Motivo Carpeta Relacionada:&nbsp;  </td>
                                                                           <td> <input type="text" name="mcarpeta" value = "<?php echo $mot; ?>" style="border-radius: 5px;" > &nbsp;</td>
                                                                           
                                                                         </tr>
                                  
                                                                       
                                                                     </table>  




                              		</div >
		</div>
		<div style ='width: 22cm; margin:22px auto; height:32cm; align=center; table.auto {table-layout: auto};  margin-top: 800px;'>
  <!-- border: 1px; border-color: black; border-style: solid;-->
	    
                         <div> 
                              	
                              

                                                  <table align='center' style = 'font-size: 14px;  margin-top: 10px;'> 

                                                  
                                                          <tr align='center'>
                                          <th align='center'><center> DESARROLLO DE LA INVESTIGACI&Oacute;N.</center> </th>
                                        </tr>
                                        <tr>
                                          <td> </td>
                                        </tr>
                                                     </table>
                                                 <table align='center' style = 'font-size: 14px;  margin-top: 20px;'> 
                                     <tr align='center'>
                                              <tr>
                                                          <td > Observaci&oacute;n:</td> 
                                                         <td > <textarea name="observ5" class='form-control' rows = '2' cols="80"> <?php echo $ob5; ?></textarea> </td> 
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

                                                                     
                                        
                       <table align='left' style = 'font-size: 14px; margin-top: 40px; margin-left: -360px;'> 

                                                                  
                                    <?php
                                            $sql1= "SELECT c.id, c.documento, h.id_caso FROM documentos c LEFT OUTER JOIN docu_caso h ON h.id_doc= c.id and h.id_caso = '$caso'";
                                      $rc1 = mysqli_query($mysql,$sql1);
                                        while($row = mysqli_fetch_array($rc1)){
                                          $id = $row["id"];
                                          $des = $row["documento"];
                                            $idh =$row["id_caso"];

                                          if($idh != $caso){
                                              echo"
                                                 <tr align='left'> <th > <input type='checkbox' name='pol3[]' value= '$id'>".utf8_encode($des)." </th> </tr>";
                                             
                                          }
                                          else{
                                            echo" <tr align='left'> <th > <input type='checkbox' name='pol3[]' value= '$id' checked>".utf8_encode($des)." </th> </tr>";
                                          }}
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
                                              <th> <input type="radio" name="resul" value="Procede"> Procede &nbsp; &nbsp;&nbsp; &nbsp;</th>
                                              <th> <input type="radio" name="resul" value="Rechazo"> Rechazo &nbsp; &nbsp;&nbsp; &nbsp;</th>
                                              <th> <input type="radio" name="resul" value="Convenio"> Convenio &nbsp; &nbsp;&nbsp; &nbsp;</th>
                                                
                                                                            
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
                              		<input type="submit" class="btn btn-danger" value="Guardar" required = '' style="margin-left: 350px;">
                              		
		</div>


</form>
<br> <br> <br>
	