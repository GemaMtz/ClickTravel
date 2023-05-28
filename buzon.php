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
                                 <a class="nav-link active" href="buzon.php">Buzon</a>
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

      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Comentarios</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Comentario -->
      <div  class="mt-4">
         <div class="container">
            <div id="main">
               <div class="row">
                  <div class="col-md-6">
                     <form action="" method="post">
                        <div style="margin: 10px 30px">
                           <div class="text-center">
                              <h2>Deja tu comentario aquí</h2>
                           </div>
                           <div class="mb-3">
                              <input type="text" class="form-control" id="us_opinion" name="us_opinion" value="<?php echo $_SESSION['Nom_user'];  ?>" disabled>
                           </div>
                           <div>
                              <textarea class="textarea form-control" id="us_description" name="us_description" placeholder="Escribe tu opinion..." type="text" name="text_user" id="text_user" required autofocus></textarea>
                           </div>
                           <div class="mt-3">
                              <center><input type="submit" id="btncomment" name="btncomment" class="btn btn-success" value="Enviar"></center>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6" style="padding: 20px;">
                     <div class="text-center mb-4">
                        <h2>Mira lo que nuestros usuarios opinan</h2>
                     </div>
                     <?php  

                        $query = $conexion->prepare('SELECT * from tbl_chat_comments');

                        $query->execute();
                        while ($campo = $query->fetch(PDO::FETCH_ASSOC)) {
                     ?>
                     <div class="form-control mb-2">
                        <div class="row mt-1">
                           <div class="col-3 text-center">
                              <img src="images/iconuser.png" alt="" width="65%" style="border-radius: 50%">
                           </div>
                           <div class="col-9">
                              <div class="mt-2 text-dark">
                                 <p><?php echo $campo['Chr_Fk_Username']; ?></p>
                              </div>
                              <div class="text-dark text-justify">
                                 <label><?php echo $campo['Chr_Description']; ?></label>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <?php } ?>
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
                     <li><a href="home.php">Home</a></li>
                     <li><a href="ayuda.php"> Ayuda</a></li>
                     <li class="active"><a href="#">Buzon</a></li>
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
      <?php require 'footer.php';?>

      <?php
         if (isset($_POST['btncomment'])) 
         {
           $usopinion = $_SESSION['Nom_user'];
           $usdescription = $_POST['us_description'];
     
           $query = "INSERT INTO tbl_chat_comments (Chr_Fk_Username, Chr_Description, Date_RecordDate) 
           VALUES (:Chr_Fk_Username, :Chr_Description, now())";

           $query = $conexion->prepare($query);
           $query->bindParam(':Chr_Fk_Username',$usopinion);
           $query->bindParam(':Chr_Description',$usdescription);
           $query->execute();
     
           $count = $query->rowCount();
     
           if ($count) 
           {
               echo '<script type="text/javascript">
               Swal.fire({
                  icon: "success",
                  title: "Comentario guardado correctamente",
                  showConfirmButton: true,
                  timer: 2500
               }).then(function(){
                     window.location="buzon.php"
               }); 
               </script>';
           }
           else
           {
               echo '<script type="text/javascript">Swal.fire({
                  icon: "warning",
                  title: "Ocurrio un error, favor de intentarlo nuevamente",
                  showConfirmButton: true,
                  timer: 5000
               });
            </script>';
           }
         }
      
      ?>

   </body>
</html>