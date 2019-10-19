<?php 
include ("conecto.php");
session_start();
if (!isset($_SESSION["id"])){
header('location:index.html');

}
$pok= $_SESSION["perfil"];
if($pok == '1'){
  $voy= "bienvenido.php";  
}
elseif($pok == '2'){
    $voy= "User.php";  
}
else{
  $voy= "index.html";     
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
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
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
        	  <div class="d-flex align-items-center"><a href="index.html" class="navbar-brand py-1"><img src="img/Alesi-logo.png" alt="Directory logo" width="90"></a>
         
          
          </div>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <form action="#" id="searchcollapsed" class="form-inline mt-4 mb-2 d-sm-none">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                <label for="searchcollapsed_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input id="searchcollapsed_search" placeholder="Search" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
                <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas">           </i></button>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="<?php echo $voy;?>" class="nav-link">Inicio</a>
              </li>
             
              
              
               <!-- /Megamenu end-->
             
           <!--   <li class="nav-item dropdown"><a id="docsDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                   
                  ¿Quiénes Somos?</a>
                <div aria-labelledby="docsDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
                  <h6 class="dropdown-header font-weight-normal">alesi.org.mx</h6><a href="nosotros.html" class="dropdown-item">¿Qué hacemos?</a><a href="MisionVisionValores.html" class="dropdown-item">Misión, Visión y Valores</a><a href="solucionesintegrales.html" class="dropdown-item">¿Que Son las Soluciones Integrales?
                  
                  
              <li class="nav-item"><a href="companiasSeguros.html" class="nav-link">Compañías de Seguros</a></li>
              <li class="nav-item"><a href="asesoriaLegal.html" class="nav-link">Asesoría Legal Especializada</a></li>
              
              <li class="nav-item"><a href="servidorPublico.html" class="nav-link">Servidor Público</a></li> -->
              
              <li class="nav-item"><a href="index.html" class="nav-link">Salir</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>
    <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
      <div role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
    </div>
    <section class="py-5 py-lg-15">
      <div class="container-fluid">
        <div class="row-fluid">
          
          <?php include("formulario2.php");?>
      </div>
    </section>
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
              <form action="#" id="newsletter-form">
                <div class="input-group mb-3">
                  <input type="email" placeholder="Suscríbete con tu mail" aria-label="Email" class="form-control bg-transparent border-dark border-right-0">
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