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
                                 <a class="nav-link" href="home.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="ayuda.php">Ayuda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="buzon.php">Buzon</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" href="#">Contactanos</a>
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

      <!-- end header -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Contactanos</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="" method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus form-control" placeholder="Nombre completo" type="text" name="nombre_user" id="nombre_user"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Correo electronico" type="email" name="email_user" id="email_user"> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensaje" type="text" name="text_user" id="text_user"></textarea>
                        </div>
                        <div class="col-md-12">
                           <center><input type="submit" id="sendopinion" name="sendopinion" class="send_btn" value="Enviar"></center>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d57590.45079899414!2d-100.936647!3d25.55825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23f8f77e1ecd13d8!2sUniversidad+Tecnol%C3%B3gica+de+Coahuila!5e0!3m2!1ses-419!2smx!4v1488316229522" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="ayuda.php"> Ayuda</a></li>
                        <li><a href="buzon.php">Buzon</a></li>
                        <li class="active"><a href="contact.php">Contactanos</a></li>
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

      <?php require 'footer.php'; ?>

      <?php 
         if (isset($_POST['sendopinion'])) 
         { 
            $nombreuser = $_POST['nombre_user'];
            $emailuser = $_POST['email_user'];
            $textuser = $_POST['text_user'];

            $mensaje = '<html>
            <head>
            <title>Recuperación de contraseña</title>
            </head>
            <body>
            <h1>Hola soy ' . $nombreuser . ',</h1><br/><br/>
            <p>' . $textuser . '.</p><br/><br/>
            <p>¡Saludos!</p>
            </body>
            </html>';

            $mensaje = wordwrap($mensaje, 70, "\r\n");

            $headers = "From: $emailuser\r\n" .
            "Reply-To: $emailuser\r\n" .
            "Content-type: text/html; charset=utf-8\r\n";

            if (mail('sabrinatello534@gmail.com', 'Mensaje de Click Travel', $mensaje, $headers)) {
               echo '<script type="text/javascript">
                  Swal.fire({
                     icon: "success",
                     title: "Se envió correctamente el correo",
                     showConfirmButton: true,
                     timer: 6000
                  });
                  document.getElementById("request").reset();
               </script>';
            } else {
               echo '<script type="text/javascript">
                  Swal.fire({
                     icon: "warning",
                     title: "Ocurrió un error al enviar el correo, favor de intentar nuevamente",
                     showConfirmButton: true,
                     timer: 6000
                  });
                  document.getElementById("request").reset();
               </script>';
            }
         }

         ob_end_flush(); 
      ?>

   </body>
</html>