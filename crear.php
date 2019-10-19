 
       <form method="post" action="registrar2.php" enctype="multipart/form-data" style="align: center">
          <div class="row form-block">
            <div class="col-lg-4">
              <h4>Usuario</h4>
             
            </div>
            <div class="col-lg-7 ml-auto">
              <div class="form-group"></div>
              <div class="form-group">
                <label for="form_name" class="form-label">Elija un nombre de usuario</label>
                <input type="text" name="usr" id="form_name" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="form_name" class="form-label">Elija una contraseña</label>
                <input name="clav" type="password" id="form_name" class="form-control">
              </div>
              <!-- /Navbar 
              <div class="form-group">
                <label for="form_type" class="form-label">Elija una Contraseña</label>
                <select name="type" id="form_type" data-style="btn-selectpicker" title="" aria-describedby="propertyTypeHelp" class="selectpicker form-control">
                  <option value="type_0">Entire place                         </option>
                  <option value="type_1">Private room                         </option>
                  <option value="type_2">Shared room                         </option>
                </select><small id="propertyTypeHelp" class="form-text text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</small>
              </div>-->
              <div class="form-group">
                <label class="form-label">Todos los datos aqui registrados son para uso exclusivo de Alesi.org.mx ¿está usted de acuerdo?</label>
                <div class="custom-control custom-radio">
                  <input type="radio" id="guests_0" name="guests" class="custom-control-input" value = "SI">
                  <label for="guests_0" class="custom-control-label">Sí, estoy de acuerdo y he leído el aviso de privacidad.</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="guests_1" name="guests" class="custom-control-input" value="NO">
                  <label for="guests_1" class="custom-control-label">No, estoy de acuerdo y he leído el aviso de privacidad.</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row form-block">
            <div class="col-lg-4">
              <h4>Datos Generales</h4>
            
            </div>
            <div class="col-lg-7 ml-auto">
              <!-- Country-->
              <div class="form-group">
                <label for="form_name" class="form-label">Nombre y Apellidos</label>
                <input name="name"  type="text" id="form_name" class="form-control">
              </div>
              <div class="form-group">
                <label for="form_name" class="form-label">Empresa</label>
                 <select name="emp"   class=" form-control">
              
                 <?php 

                 $sq3l= "select * from aseguradora ";
                    $rc3 = mysqli_query($mysql,$sq3l);
                      while($row = mysqli_fetch_array($rc3)){
                        $id3 = $row["id"];
                        $nombre3 = $row["nombre"];
                    echo"<option value='$id3'>".utf8_encode($nombre3)."</option>";
                      }

                 ?>
                 </select>
              </div>
              
              <div class="form-group">
                <label for="form_country" class="form-label">País / Región</label>
                <select name="country" class="form-control">
                 <?php 

                 $sql= "select * from paises ";
                    $rc = mysqli_query($mysql,$sql);
                      while($row = mysqli_fetch_array($rc)){
                        $id = $row["id"];
                        $pais = $row["nombre"];
                    echo"<option value='$id'>".utf8_encode($pais)."</option>";
                      }

                 ?>
                </select>
              </div>
              <!-- Street-->
              <div class="form-group">
                <label for="form_street" class="form-label">Calle</label>
                <input name="calle" type="text" id="form_street" class="form-control">
              </div>
              <!-- City + State-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_city" class="form-label">Ciudad</label>
                    <input name="city" type="text" id="form_city" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_state" class="form-label">Alcaldía</label>
                    <input name="alcal" type="text" id="form_state" class="form-control">
                  </div>
                </div>
              </div>
              <!-- ZIP Code-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_zip" class="form-label">Código Postal</label>
                    <input name="postal" type="text" id="form_zip" class="form-control">
                  </div>
                  
                </div>
              </div>
              
              <div class="form-group mb-5">
                <label for="form_description" class="form-label">Describa brevemente el giro de su empresa</label>
                <textarea name="des" id="form_description" rows="5" aria-describedby="descriptionHelp" class="form-control"></textarea>
              </div>
              </div>
              </div>
          <div class="row form-block flex-column flex-sm-row">
            <div class="col text-center text-sm-left">
            </div>
           <div class="col text-center text-sm-right">
            <input type="submit" class="btn btn-primary px-3" value="Enviar" required = '' >
           <!-- <a href="user-add-2.html" class="btn btn-primary px-3">
                 
                Enviar<i class="fa-chevron-right fa ml-2"></i></a> --></div> 
          </div>
        </form>