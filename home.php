<?php
  ob_start();
  session_start();
  if(empty($_SESSION['Nom_user'])) {
      // Variable de sesión vacía, redirigir a otra página
      echo '<script>window.location.href = "index.php";</script>';
      exit;
   }
?>
<!DOCTYPE html>
<html lang="en">
   <?php require 'head.php'; ?>
   <?php 
      require 'cnn.php';
      $conexion= new conexion();
   ?>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo mt-2">
                              <a href="#" class="tittle"><h1>Click Travel</h1></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link active" href="home.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="ayuda.php">Ayuda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="buzon.php">Buzon</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contactanos</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="logout.php">Cerrar sesión</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Descubre nuestros paquetes</h2>
                     <div class="mt-3">
                        <input type="text" class="form-control" id="searchInput" placeholder="Buscar...">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6 item">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Machu Picchu.jpeg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Machu Picchu, Peru</h3>
                        <p>Paquetes Turísticos Y Los Mejores Viajes a Machu Picchu desde 3 dias a 15 dias $799.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 item">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Suiza.jpeg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Suiza</h3>
                        <p>Elige una aventura inolvidable en nuevos destinos, ¡espera nuestras ofertas!</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 item">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Europa.jpeg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Europa</h3>
                        <p>Viaje organizado en grupo con guía en español. Vuelos incluidos desde la C. de México. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 item">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Argentina.jpeg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Argentina</h3>
                        <p>Viaja a tu ritmo, viaja distinto. Compra tu Pasaje a Argentina al Mejor Precio.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 item">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Bali.jpeg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>¡VIAJA A BALI!</h3>
                        <p>El #verano es la mejor época para viajar a Bali si quieres evitar la lluvia. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 item">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Vegas.jpeg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>¡VIAJA A LAS VEGAS!</h3>
                        <p>Aprovecha nuestras ofertas de paquetes con precios increíbles. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-6">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Industria Metalúrgica, Blvd. del Parque Industrial Francisco R. Alanis 2001, 25900 Ramos Arizpe, Coah.</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +52 844 123 4567</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> clicktravel@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <h3>Menu</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="ayuda.php"> Ayuda</a></li>
                        <li><a href="buzon.php">Buzon</a></li>
                        <li><a href="contact.php">Contactanos</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-10">
                     <p>
                     © 2023 All Rights Reserved. Tello Orozco, Martinez Mendoza, Campos Velazquez
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->

      <!-- Javascript files-->
      <?php require 'footer.php'; ?>

      <script type="text/javascript">
         searchInput.addEventListener('input', searchItems);
      </script>
   </body>
</html>