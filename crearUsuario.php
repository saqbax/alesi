<?php 
include ("conecto.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Usuario</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
</head>
  <body style="padding-top: 72px;">
    <header class="header">
      <!-- Navbar-->
      <?php include ("menu.php");?>
      <!-- /Navbar -->

      <!-- /Navbar -->
    </header>
    <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
      <div role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
    </div>
   
    
    <section class="py-5">
      <div class="container">
        <p class="subtitle text-primary">Nuevo Usuario</p>
        <h1 class="h2 mb-5">Por favor llene el siguiente formulario:<span class="text-muted float-right">ALESI</span>                </h1>
       <form method="post" action="registrar2.php" enctype="multipart/form-data" style="align: center">
          <div class="row form-block">
            <div class="col-lg-4">
              <h4>Usuario</h4>
              <p class="text-muted text-sm">Registre un nombre de usuario sencillo que le permita accesar rápidamente a nuestra plataforma y una contraseña segura.</p>
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
              <p class="text-muted text-sm">Sea tan amable de rellenar todos los campos requeridos para otorgarle total acceso a nuestra plataforma de visualización de progreso.</p>
            </div>
            <div class="col-lg-7 ml-auto">
              <!-- Country-->
              <div class="form-group">
                <label for="form_name" class="form-label">Nombre y Apellidos</label>
                <input name="name"  type="text" id="form_name" class="form-control">
              </div>
              <div class="form-group">
                <label for="form_name" class="form-label">Empresa</label>
                 <select name="emp"  data-style="btn-selectpicker" title=" " data-live-search="true" class="selectpicker form-control">
              
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
                <select name="country" id="form_country" data-style="btn-selectpicker" title=" " data-live-search="true" class="selectpicker form-control">
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
                <textarea name="des" id="form_description" rows="5" aria-describedby="descriptionHelp" class="form-control"></textarea><small id="descriptionHelp" class="form-text text-muted mt-2">Con toda la información que usted nos acaba de proporcionar, nosotros podrémos ponernos en contacto con usted para el seguimiento del proceso de sus folios.</small>
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
      </div>
    </section>
    
    
    
    
    
    
    <!-- Footer-->
  <!-- Footer-->
    <footer class="position-relative z-index-10">
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 bg-gray-200 text-muted"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="font-weight-bold text-uppercase text-dark mb-3">alesi.org.mx</div>
              <p>Atención especializada a Aseguradoras.</p>
              <li><a href="login.html" class="text-muted">Sing In   </a></li>
             
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary"><i class="fab fa-instagram"></i></a></li></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Servicios</h6>
              <ul class="list-unstyled">
                <li><a href="nosotros.html" class="text-muted">¿Quiénes Somos?   </a></li>
                <li><a href="MisionVisionValores.html" class="text-muted">Servicios Misión, Visión y Valores   </a></li>
                <li><a href="solucionesintegrales.html" class="text-muted">Soluciones Integrales     </a></li>
                <li><a href="companiasSeguros.html" class="text-muted">Servicios a Compañías de Seguros</a></li>
                <li><a href="asesoriaLegal.html" class="text-muted">Asesoría Legal Especializada</a></li>
                <li><a href="servidorPublico.html" class="text-muted">Consultoría a Servidores Públicos </a></li>
                
              </ul>
            </div>
           
            <div class="col-lg-4">
              <h6 class="text-uppercase text-dark mb-3">Suscríbete a nuestro boletín</h6>
              <p class="mb-3">Conoce lo nuevo en Asesoría Legal Especializada e Investigaciones S.C.</p>
              <p class="mb-3">Sabrás antes que nadie de nuestros nuevos servicios especializados</p>
              <p class="mb-3">Tus datos son para uso informativo y exclusivo de alesi.org.mx</p>
             <form action="guardotxt.php" method="post" id="newsletter-form">
                <div class="input-group mb-3">
                  <input type="email" placeholder="Suscríbete con tu mail" aria-label="Email" class="form-control bg-transparent border-dark border-right-0" name= "suscriptor">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-dark border-left-0"> <i class="fa fa-paper-plane text-lg"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <p class="text-sm mb-md-0">&copy; 2019 ALESI.ORG.MX  Todos los derechos reservados </p>
              <p class="text-sm mb-md-0"><a href="AvisoPrivacidad.html">Aviso de privacidad</a></p>
              <p class="text-sm mb-md-0"><a href="http://www.punto01.com">Sito desarrollado por punto01 | Diseño</a>
              </h1></p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                <li class="list-inline-item"><img src="img/visa.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/mastercard.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/paypal.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/western-union.svg" alt="..." class="w-2rem"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer end-->
    <!-- /Footer end-->
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-1/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
  </body>
</html>