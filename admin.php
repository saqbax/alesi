<?php 
include ("conecto.php");
session_start();
if (!isset($_SESSION["id"])){
header('location:index.html');

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asesoría Legal Especializada e Investigaciones S.C.</title>
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
    <style type="text/css">
    body,td,th {
	font-family: Poppins, sans-serif;
}
a:link {
	color: #FFFFFF;
}
a:hover {
	color: #FFFFFF;
}
    </style>
</head>
  <body style="padding-top: 72px;">
    <header class="header">
      <!-- Navbar-->
     <?php include("menu.php");?>
      <!-- /Navbar -->
      
          </header>
    <section style="background-image: url(img/AlesiInicio.jpg);" class="d-flex align-items-center dark-overlay bg-cover">
      <div class="container py-5 py-lg-7 text-white overlay-content text-center"> 
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <h1 class="display-2 font-weight-bold text-white text-white-30"><img src="img/LogoAlesi1.png" class="img-fluid" alt="Responsive image" width="200" alt="ALESI.ORG.MX Asesoría Legal Especializada e Investigaciones S.C."><img src="img/LogoAlesi2.png" class="img-fluid" alt="Responsive image" width="350" alt="alesi.org.mx Asesoría Legal Especializada e Investigaciones S.C."></h1>
            <h2 class="text-lg text-white">ALESI Asesoría Legal Especializada e Investigaciones S.C.</h2>
            <h4p class="text-lg text-white">Llámanos al  <strong> 6648-1730</strong></h4>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
    
    <h3>&nbsp;</h3>
<hr class="red">
      <!-- /Navbar <div class="search-bar rounded p-3 p-lg-4 position-relative mt-n5 z-index-20">
        <form action="#">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-center form-group">
              <input type="search" name="search" placeholder="¿Qué tipo de seguro o asesoría legal buscas?" class="form-control border-0 shadow-0">
            </div>
            
            <div class="col-md-6 col-lg-4 d-flex align-items-center form-group no-divider">
              <select title="Categorías" data-style="btn-form-control" class="selectpicker">
                <option value="small">Seguro de Vida</option>
                <option value="medium">Seguro de Auto</option>
                <option value="large">Seguro de Daños</option>
                 <option value="large">Seguro de Vida</option>
                 <option value="large">Asesoría Legal</option>
                  <option value="large">Investigación en Incidentes</option>
                <option value="x-large">Seguro de Gastos Médicos</option>
                <option value="x-large">Seguro de Vida</option>
              </select>
            </div>
            <div class="col-lg-2 form-group mb-0">
              <button type="submit" class="btn btn-primary btn-block h-100">Buscar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <!-- sección de servicios-->
    
   
    
    
    <section class="py-6">
      <div class="container">
        <div class="row mb-5">
        
        
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0 h-100"><a href="companiasSeguros.html"><img src="img/segAuto/RoboAuto.jpg" alt="seguro de Auto" class="img-fluid card-img-top"/></a>
              <div class="card-body">
                <p>&nbsp;</p>
                <h5 class="my-2"><a href="companiasSeguros.html" class="text-dark">Servicios a Compañías de Seguros.</a></h5>
                <p class="text-gray-500 text-sm my-3"><i class=""></i></p>
                <p class="my-2 text-muted text-sm" style="text-align: left">Investigación de Siniestros Automovilísticos. Investigación de Siniestros G.M.M., A.P. y Vida.</p>
                <p class="my-2 text-muted text-sm" style="text-align: left">Investigación de Siniestros Diversos y/o Generales.</p>
                <a href="companiasSeguros.html" class="btn btn-link pl-0">leer más...<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- blog item-->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0 h-100"><a href="asesoriaLegal.html"><img src="img/abogados.jpg" alt="..." class="img-fluid card-img-top"/></a>
              <div class="card-body">
                <p>&nbsp;</p>
                <h5 class="my-2"><a href="asesoriaLegal.html" class="text-dark">Asesoría Legal Especializada.       </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class=""></i></p>
                <p class="my-2 text-muted text-sm">Nosotros le apoyamos con la Asesoría Jurídica ante cualquier eventualidad de carácter legal.</p>
                <p class="my-2 text-muted text-sm">Contamos con los recursos técnicos, materiales y humanos necesarios para representar a nuestros clientes, desde una consulta, hasta los casos más complejos.</p>
                <a href="asesoriaLegal.html" class="btn btn-link pl-0">Leer más...<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- blog item-->
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0 h-100"><a href="solucionesintegrales.html"><img src="img/solucionesIntegrales.jpg" alt="..." class="img-fluid card-img-top"/></a>
              <div class="card-body">
                <p>&nbsp;</p>
                <h5 class="my-2"><a href="solucionesintegrales.html" class="text-dark">¿Qué son las soluciones integrales?       </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class=""></i></p>
                <p>Tenemos la convicción de que el trabajo  constante genera resultados óptimos y que la satisfacción del cliente es  nuestro principal objetivo.</p>
                <a href="solucionesintegrales.html" class="btn btn-link pl-0">Leer más...<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
           </div>
          
          
         <!-- Call to Action Well -->
    <div class="card text-white bg-info my-5 py-1 text-center">
      <div class="card-body">
        <p class="text-white m-0">Agradecemos a nuestros clientes la confianza que nos brindan...</p>
      </div>
    </div>
    
    
     <section class="py-6 bg-gray-100 shadow text-center">
      <div class="container">
        
        <img src="img/logosaseguradoras.png" width="100%" class="img-fluid" alt="Responsive image">
       
      </div>
    </div>
    
 
    </section>
    
 
<hr class="red">
          
          
    
   
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
               <li><a href="http://65.99.252.186:2095/cpsess3624656767/webmail/paper_lantern/index.html?login=1&post_login=34869412913392" class="text-muted">Correo web ALESI  </a></li>
             
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