<?php  
  ob_start();  
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Click Travel</title>
      <!-- JQuery Validate library -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!-- Libreria de sweetalert 2-->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

   </head>
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
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner1.jpg" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="book_room">

                        <form class="book_now" id="FormLogin" method="post" action="">
                           <h1>Inicio de sesión</h1>
                           <div class="row">
                              <div class="col-md-12 mb-3">
                                 <input class="form-control" placeholder="Usuario" type="text" name="user_name" id="user_name">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <input class="form-control" placeholder="Contraseña" type="password" name="user_pssw" id="user_pssw">
                              </div>
                              <div class="mb-2 ml-4">
                                 <label for="showPassword0" style="color: white">Mostrar contraseña&nbsp;&nbsp;</label>
                                 <input type="checkbox" id="showPassword0" onclick="ShowPasswordForm0()">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <input type="submit" id="btnlogin" name="btnlogin" class="book_btn" value="Iniciar sesión">
                                 <div class="mt-3 text-center" style="color: white">
                                    <label id="linkRecord">¿Aún no tienes cuenta?&nbsp; <a href="#" class="links" onclick="MiButton('login')" >Regístrate</a> </label><br>
                                    <label id="linkPassword" style="display:none">¿Olvidaste tu contraseña?&nbsp;<a href="#" class="links" onclick="Recuperar()"  class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Recuperar</a> </label>
                                 </div>
                              </div>
                           </div>
                        </form>


                        <form class="book_now invisible" id="FormRecord" method="post" action="">
                           <h1>Registro</h1>
                           <div class="row">
                              <div class="col-md-12 mb-3">
                                 <input class="form-control" placeholder="Usuario" type="text" name="new_user" id="new_user">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <input class="form-control" placeholder="Correo electrónico" type="email" name="new_email" id="new_email">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <input class="form-control" placeholder="Contraseña" type="password" id="new_pssw" name="new_pssw">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <input class="form-control" placeholder="Confirmar contraseña" type="password" id="new_pssw2" name="new_pssw2">
                              </div>
                              <div class="mb-2 ml-4">
                                 <label for="showPassword" style="color: white">Mostrar contraseña&nbsp;&nbsp;</label>
                                 <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()">
                              </div>
                              <div class="col-md-12">
                                 <input type="submit" id="btnregister" name="btnregister" class="book_btn" value="Registrarse">
                                 <div class="mt-3 text-center" style="color: white">
                                    <label>¿Ya tienes cuenta?&nbsp; <a href="#" class="links" onclick="MiButton('register')" >Inicia sesión</a> </label>
                                 </div>
                              </div>
                           </div>
                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Sección de la modal para recuperar la contraseña -->
      <section>
         <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
               <form action="" method="POST" id="form-recovery">
                  <div class="modal-header" style="color: white">
                     <h3 class="modal-title" id="staticBackdropLabel">Recuperar contraseña</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body" style="background-color: #849DA2">
                     <h4 for="emailfound">Correo electrónico</h4>
                     <input type="email" class="form-control" name="emailfound" id="emailfound" placeholder="Escribe aquí...">
                     <br/>
                     <div class="col-12 text-center">
                        <div class="g-recaptcha" data-sitekey="6LepNUEmAAAAAL_3L-7ZeV8WTz2WrAelTAJzEkms"></div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearForm()">Cerrar</button>
                     <button type="button" id="btnrecovery" name="btnrecovery" class="btn btn-success" onclick="captchaValido()">Enviar contraseña</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      </section>

      
      <!--  footer -->
      <footer>
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
      <script src="js/main.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>   
      <script type="text/javascript">
         link1.style.display = "none";
      </script>

<?php 

    if (isset($_POST['btnlogin'])) 
    {
      $usuario = $_POST['user_name'];
      $pssw = $_POST['user_pssw'];

      $cipherpssw = md5($pssw);

      $query = $conexion->prepare('SELECT * from tbl_chat_users WHERE Chr_Username = :Chr_Username and Chr_Password =:Chr_Password');

      $query->bindParam(':Chr_Username',$usuario);
      $query->bindParam(':Chr_Password',$cipherpssw);

      $query->execute();

      $count=$query->rowCount();
      $campo = $query->fetch();

      if ($count) 
      {
        echo '<script type="text/javascript">
        Swal.fire({
           icon: "success",
           title: "Bienvenido nuevamente",
           showConfirmButton: true,
           timer: 2500
        }).then(function(){
              window.location="home.php"
        }); 
        </script>';
         $_SESSION['Nom_user'] = $campo['Chr_Username'];
      }
      else
      {
         echo '<script type="text/javascript">Swal.fire({
            icon: "warning",
            title: "La contraseña o el usuario son incorrectos",
            showConfirmButton: true,
            timer: 5000
          });
          //link2.style.display = "none";
          link1.style.display = "block";
       </script>';
         unset($query);
      }
    }

    if (isset($_POST['btnregister'])) 
    {
      $newuser = $_POST['new_user'];
      $newemail = $_POST['new_email'];
      $newpssw = $_POST['new_pssw'];
      $newpssw2 = $_POST['new_pssw2'];

      $cipherpssw2 = md5($newpssw);

      $query = $conexion->prepare('SELECT * from tbl_chat_users WHERE Chr_Username = :Chr_Username and Chr_EmailUser = :Chr_EmailUser');

      $query->bindParam(':Chr_Username',$newuser);
      $query->bindParam(':Chr_EmailUser',$newemail);
      $query->execute();

      $count=$query->rowCount();

      if ($count) 
      {
         unset($query);
         unset($form); ?>
         <script type="text/javascript">
         Swal.fire({
         icon: 'warning',
         title: 'El nombre de usuario o correo ya existen, favor intentar con uno diferente',
         showConfirmButton: true,
         timer: 6000
         }); </script><?php
      }
      else
      {
         $query2 = "INSERT INTO tbl_chat_users (Chr_Username, Chr_Password, Chr_EmailUser, Date_RecordDate) 
         VALUES (:Chr_Username, :Chr_Password, :Chr_EmailUser, now())";

         $query2 = $conexion->prepare($query2);

         $query2->BindParam(':Chr_Username',$newuser);  
         $query2->BindParam(':Chr_Password',$cipherpssw2); 
         $query2->BindParam(':Chr_EmailUser',$newemail); 

         $query2->execute();
         $count = $query2->rowCount();

         if ($count) 
         {
            unset($query2);
            unset($form); ?>
            <script type="text/javascript">
            Swal.fire({
               icon: 'success',
               title: 'El proceso se hizo correctamente',
               showConfirmButton: true,
               timer: 2500
            }).then(function(){
                  window.location="home.php"
            }); </script><?php
         }
         else 
         {
            ?><script>
            Swal.fire({
               icon: 'warning',
               title: 'Ocurrió un error, favor de intentarlo nuevamente',
               showConfirmButton: true,
               timer: 2500
            });
            </script><?php
         }
      }
    }

    // Función para resetar la contraseña para su recuperación
    if (isset($_POST['btnrecovery'])) 
    { 
      $foundemail = $_POST['emailfound'];
      $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $nuevaContraseña = "";

      for ($i = 0; $i < 8; $i++) 
      {
         $nuevaContraseña .= $caracteres[rand(0, strlen($caracteres) - 1)];
      }

      $cipherpssw3 = md5($nuevaContraseña);

      $query3 = $conexion->prepare('SELECT * from tbl_chat_users WHERE Chr_EmailUser = :Chr_EmailUser');

      $query3->bindParam(':Chr_EmailUser',$foundemail);
      $query3->execute();
      $campo3 = $query3->fetch();

      $count3 = $query3->rowCount();

      if ($count3) 
      {
         $mensaje = '<html>
         <head>
         <title>Recuperación de contraseña</title>
         </head>
         <body>
         <h1>Hola '+ $campo['Chr_Username'] +',</h1><br/><br/>
         <p>Se solicito una recuperación de la contraseña de su cuenta.</p><br/><br/>
         <h2>Su nueva contraseña: <b style="color: blue">'+ $nuevaContraseña +'</b>,</h2><br/><br/>
         <p>Si la solicitud no la realizo usted, favor de comunicarse con nosotros.</p><br/>
         <p>¡Gracias por utilizar nuestro servicio!</p>
         </body>
         </html>';

         $mensaje = wordwrap($mensaje, 70, "\r\n");

         if(mail($foundemail, 'Nueva contraseña para click travel', $mensaje, 'From: clicktravel@gmail.com' . "\r\n" .
         'Reply-To: clicktravel@gmail.com' . "\r\n" .
         'Content-type: text/html; charset=utf-8' . "\r\n"))
         {
            $query4 = $conexion->prepare('UPDATE tbl_chat_users SET Chr_Password = :Chr_Password WHERE Chr_EmailUser = :Chr_EmailUser');

            $query4->bindParam(':Chr_Password', $cipherpssw3);
            $query4->bindParam(':Chr_EmailUser', $foundemail); 
            $query4->execute();

            $count4 = $query4->rowCount();
            if($count4)
            {
               ?>
               <script type="text/javascript">
               Swal.fire({
               icon: 'success',
               title: 'Se envió correctamente el correo con su nueva contraseña a la dirección:\n' + $foundemail,
               showConfirmButton: true,
               timer: 6000
               }); </script><?php
            }
            else 
            {
               ?>
               <script type="text/javascript">
               Swal.fire({
               icon: 'warning',
               title: 'Ocurrión un error al resetear su contraseña, favor de intentar nuevamente',
               showConfirmButton: true,
               timer: 6000
               }); </script><?php
            }
         }
         else 
         {
            ?>
               <script type="text/javascript">
               Swal.fire({
               icon: 'warning',
               title: 'Ocurrión un error al enviar el correo, favor de intentar nuevamente',
               showConfirmButton: true,
               timer: 6000
               }); </script><?php
         }
      
      }
      else 
      {
         ?>
         <script type="text/javascript">
         Swal.fire({
         icon: 'warning',
         title: 'No se encontro el correo registrado, favor de intentar con uno valido',
         showConfirmButton: true,
         timer: 6000
         }); </script><?php
         unset($query3);
         unset($form);
      }
      
    }
    ob_end_flush();
  ?>

   </body>
</html>