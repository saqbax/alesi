 <?php include("conecto.php");?>
 <br> <br> 
 <center> <h6>Seleccione la Aseguradora</h6></center> 

          <br> 
           <form method="post" action="formulario.php" enctype="multipart/form-data" style="align: center; margin-top: 50px; margin-bottom: 50px;">
                   <div class="form-group">
                <label for="form_name" class="form-label">Seleccione Aseguradora</label>
                 <select name="emp"   class=" form-control" required = ''>
              
                 <?php 

                 $sq3l= "select * from aseguradora where id not in ('3') and sts ='APR'";
                    $rc3 = mysqli_query($mysql,$sq3l);
                      while($row = mysqli_fetch_array($rc3)){
                        $id3 = $row["id"];
                        $nombre3 = $row["nombre"];
                    echo"<option value='$id3'>".utf8_encode($nombre3)."</option>";
                      }

                 ?>
                 </select>
              </div>
             <div class="col text-center text-sm-right">
            <input type="submit" class="btn btn-primary px-3" value="Enviar" required = '' >
           <!-- <a href="user-add-2.html" class="btn btn-primary px-3">
                 
                Enviar<i class="fa-chevron-right fa ml-2"></i></a> --></div> 
          </div>
                </form>
      <br> <br> <br>