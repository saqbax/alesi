 <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white text-center">
      
        <div class="container-fluid">
                 <div class="d-flex align-items-center"><a href="index.html" class="navbar-brand py-1"><img src="img/Alesi-logo.png" alt="Directory logo" width="90"></a>
                 
                 
          
          
            <form action="#" id="" class="">
              <div class=""> 
              
              
               
              
               <label for="" class="label-absolute"><i class=""></i><span class="sr-only"></span></label>
                
                <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas"></i></button>
              </div>
            </form>
          </div>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <form action="#" id="searchcollapsed" class="form-inline mt-4 mb-2 d-sm-none">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
               <!-- Navbar Collapse <label for="searchcollapsed_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>-->
                <!-- Navbar<input id="searchcollapsed_search" placeholder="Search" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">-->
                <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas">           </i></button>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
             
              <!-- Megamenu-->
              
                          <!-- Megamenu list-->
                         
                          <!-- Megamenu list-->
                         
                          <!-- Megamenu list-->
                         
                          <!-- Megamenu list-->
                         
                          <!-- Megamenu list-->
            
                  
              <!-- /Megamenu end-->
             <!-- <li class="nav-item active"><a href="admin.php" class="nav-link">Inicio</a> -->
              <li class="nav-item active"><a href="bienvenido.php" class="nav-link">Inicio</a>
              </li>
             
              
              
               <!-- /Megamenu end-->
             
              <li class="nav-item dropdown"><a id="docsDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                   
                  Casos</a>
                <div aria-labelledby="docsDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
                  <h6 class="dropdown-header font-weight-normal">alesi.org.mx</h6><a href="abrirCaso.php" class="dropdown-item">Abrir Caso</a><a href="verCaso.php" class="dropdown-item">Ver Casos</a>
                  <?php if($_SESSION["perfil"] == 1){?> 
                  <li class="nav-item dropdown"><a id="docsDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                   
                  Usuarios</a>
                <div aria-labelledby="docsDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
                  <h6 class="dropdown-header font-weight-normal">alesi.org.mx</h6><a href="crearUsuario.php" class="dropdown-item">Crear Usuarios</a><a href="Usuarios.php" class="dropdown-item">Aprobar Usuarios</a><a href="UsuariosApr.php" class="dropdown-item">Usuario Aprobados</a>
                  
                  <?php }
            ?>
              
             <?php
             if($_SESSION["id"] == ''){
              echo' <li class="nav-item"><a href="login.html" class="nav-link">Sign in</a></li>';}
              else {
          echo' <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
              }

             ?>
             <!-- /Navbar <li class="nav-item"><a href="signup.html" class="nav-link">Sign up</a></li
              <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a href="PagoPaypal.html" class="btn btn-primary">Pago PayPal</a></li>>--> 
            </ul>
          </div>
              
              
             
          </ul>
          </div>
        </div>
      </nav>