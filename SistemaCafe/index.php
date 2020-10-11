<?php // Example 26-4: index.php
  session_start();
  require_once 'header.php';

  echo "<div class='texto'>Bienvenido a mi pagina de negocio,";

  if ($loggedin) echo " $user,  Has iniciado sesion correctamente uwu";
  else           echo ' favor de registrarte o iniciar sesion';

  echo <<<_END
    <br>
    <div data-role="footer" class="piedepag">
       <br>
       <div class="container">
          <div class="row">
             <div class="col-md-12" class="pietitulo">
                <h2 class="colortexto">Informacion sobre mi:</h2>
             </div>
             <div class="col-md-5">
                <img src="images/PicsArt_04-21-02.44.11.png" width="50px" height="50px">
                Nombre:
             </div>
             <br>
             <br>
             <div class="col-md-5">
                Pedro Adrian Caamal Martinez
             </div>
             <div class="col-md-5">
                <img src="images/PicsArt_04-21-03.02.19.png" width="60px" height="60px">
                Num de Telefono:
             </div>
             <div class="col-md-5">
                9831586146
             </div>
          </div>
          <div class="row">
             <div class="col-md-5">
                <img src="images/PicsArt_04-21-03.09.50.png" width="55px" height="55px">
                Correo Electronico:
             </div>
             <div class="col-md-5">
                am0166653@gmail.com
             </div>
             <br>
          </div>
          <br>
          <div class="row">
             <div class="col-md-12">
                <h2 class="colortexto2">HECHO EN MEXICO</h2>
             </div>
          </div>
          <div class="row">
             <div class="col-md-3">
                <a href="https://m.facebook.com/"><img src="images/PicsArt_03-01-07.53.56.png" width="150px" height="150px"></a>
             </div>
             <div class="col-md-3">
                <a href="https://www.instagram.com/"><img src="images/PicsArt_04-21-03.10.58.png" width="180px" height="150px"></a>
             </div>
             <div class="col-md-3">
                <a href="https://www.google.com/intl/es/gmail/about/"><img src="images/PicsArt_04-21-03.09.50.png" width="150px" height="150px"></a>
             </div>
             <div class="col-md-3">
                <a href="https://www.spotify.com/mx/"><img src="images/PicsArt_04-21-03.12.25.png" width="150px" height="150px"></a>
             </div>
             <br>
          </div>
          <br>
        </div>
        <h4>Web App from <i><a href='http://localhost/socialred_v5' target='_blank'>Web Development</a></i></h4>
    </div>
    <br>

    <script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

  </body>
 </html>
_END;
?>
