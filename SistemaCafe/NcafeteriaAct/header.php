<?php
require "vendor/autoload.php";
   session_start();
 echo <<<_INIT
 <!DOCTYPE html>
 <html>
   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
      <link rel='stylesheet' href='cafeteria.css'>
      <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
      <script src='javascript.js'></script>
      <script src='node_modules/jquery/js/jquery.min.js'></script>
      <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
_INIT;
      require_once 'functions.php';
      $userstr = 'Cafeteria';
      if (isset($_SESSION['user']))
      {
         $user      = $_SESSION['user'];
         $loggedin = TRUE;
         $userstr   = "Logged in as: $user";
      }
      else $loggedin = FALSE;

 echo <<<_MAIN
      <title>$userstr</title>
   </head>
   <body>
      <div data-role='page' class="FondoCafeteria">
      <header class="encabezado1">
         <h1 class="title1">~ NEGOCIO DE CAFETERIA ~</h1>
      </header>
      <div data-role='content'>
_MAIN;
   if ($loggedin){
 echo <<<_LOGGEDIN
         <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home' data-transition="slide" href='members.php?view=$user'>Inicio</a>
            <a data-role='button' data-inline='true' data-icon='user' data-transition="slise"  href='members.php'>Miembros</a>
            <a data-role='button' data-inline='true' data-icon='heart' data-transition="slide" href='friends.php'>Amixes</a><br>
            <a data-role='button' data-inline='true' data-icon='mail' data-transition="slide" href='messages.php'>Mensajes</a>
            <a data-role='button' data-inline='true' data-icon='edit' data-transition="slide" href='profile.php'>Editar Perfil</a>
            <a data-role='button' data-inline='true' data-icon='action' data-transition="slide" href='logout.php'>Iniciar Sesion</a>
         </div>
         
 _LOGGEDIN;
   }
   else {
 echo <<<_GUEST
   <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
      <a class="navbar-brand" href="#">Negocio de Cafeteria:</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="signup.php">Registrarse</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="login.php">Iniciar Sesion</a>
            </li>
         </ul>
      </div>
   </nav>

   <br>
   <div id="carouselExampleCaptions" class="carousel slide border centrarcarr" data-ride="carousel">
     <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img id="img1" src="images/cafetipo.png" class="d-block w-50" alt="100px">
         <br>
         <br>
         <div class="carousel-caption d-none d-md-block">
           <h5 class="subtitulo">~ TIPOS DE CAFE ~</h5>
         </div>
      </div>
      <div class="carousel-item">
        <img id="img2" src="images/frappe.png" class="d-block w-50" alt="100px">
        <br>
        <br>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="subtitulo">~ FRAPPES ~</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img id="img3" src="images/cappuchino.png" class="d-block w-50" alt="100px">
        <br>
        <br>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="subtitulo">~ CAPPUCHINOS ~</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img id="img4" src="images/cafecaliente.png" class="d-block w-50" alt="100px">
        <br>
        <br>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="subtitulo">~ CAFES CALIENTES ~</h5>
        </div>
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
   </div>
   <br>

   <br>
   <div class="accordion" id="accordionExample">
      <div class="card" id="fondocard1">
         <div class="card-header" id="headingOne">
            <h2 class="mb-0" id="Informacion1">
              <button  id="fondoboton1" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Informacion sobre las Bebidas Frias
              </button>
            </h2>
         </div>

         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body" id="bebidasfrias">
               <p class="cardstext">En nuestra cafeteria de: Coffes Martinez, vendemos de todo tipo de bebidas, les voy a hablar sobre las bebidas frias que vendemos.</p>
               <p class="cardstext">Aqui en la cafeteria, vendemos Frappes ya sea de chocolate, fresa, vainilla, etc. Tambien vendemos malteadas, frappuchinos, frappes con hielo, cappuchinos, entre otras bebidas frias.</p>
               <img src="images/frappe.png" id="frappe" width="200px" height="200px">
            </div>
         </div>
      </div>
      <div class="card" id="fondocard2">
         <div class="card-header" id="headingTwo">
            <h2 class="mb-0" id="Informacion2">
              <button id="fondoboton2" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Informacion sobre las Bebidas Calientes
              </button>
            </h2>
         </div>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body" id="bebidascalientes">
               <p class="cardstext">En nuestra cafeteria aparte de vender bebidas frias, tambien vendemos bebidas calientes, aqui les voy a dar un poco de informacion.</p>
               <p class="cardstext">En nuestra cafeteria vendemos bebidas como por ejemplo, te, cafes, cappuchino, cafe americano, latte y cafe moka, entre algunas otras bebidas.</p>
               <img src="images/cafecaliente.png" id="cafecal" width="200px" height="200px">
            </div>
         </div>
      </div>
      <div class="card" id="fondocard3">
         <div class="card-header" id="headingThree">
            <h2 class="mb-0" id="Informacion3">
              <button id="fondoboton3" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Informacion sobre los Postres
              </button>
            </h2>
         </div>
         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body" id="postres">
               <p class="cardstext">En la cafeteria no solo vendemos bebidas, sino que tambien vendemos postres, para que nuestros clientes puedan acompañar su bebida con algun rico postre.</p>
               <p class="cardstext">De postres vendemos pasteles ya sea de chocolate, de tres leches, pastel imposible, etc. Los pasteles los vendemos en rebanadas, aparte de los pasteles, tambien vendemos pays, donas y panes.</p>
               <img src="images/pastel.png" id="postre" width="200px" height="200px">
            </div>
         </div>
      </div>
      <div class="card" id="fondocard4">
         <div class="card-header" id="headingfour">
            <h2 class="mb-0" id="Informacion4">
              <button id="fondoboton4" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                 Informacion sobre Panes 
              </button>
            </h2>
         </div>
         <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
            <div class="card-body" id="panestipos">
               <p class="cardstext">En la cafeteria nuestros clientes no solo pueden acompañar sus cafes y otras bebidas con pasteles sino que tambien las pueden acompañar con panes</p>
               <p class="cardstext">Estos son algunos de los panes que vendemos:</p>
               <ol class="cardstext">
                  <li>Conchas: Chocolate, fresa y Vainilla.</li>
                  <li>Hojaldras: con jamon y queso y sin nada.</li>
                  <li>Panquesitos.</li>
                  <li>Donas: Chocolate, Con azucar, etc.</li>
               </ol>
               <img src="images/panes.png" id="panes" width="300px" height="250px">
            </div>
         </div>
      </div>
      <div class="card" id="fondocard5">
         <div class="card-header" id="headingfive">
            <h2 class="mb-0" id="Informacion5">
              <button id="fondoboton5" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                 Informacion sobre los Desayunos
              </button>
            </h2>
         </div>
         <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
            <div class="card-body" id="desayunos">
               <p class="cardstext">En la cafeteria aparte de vender pasteles y panes para acompañar las bebidas, tambien vendemos desayunos para que los clientas puedan disfrutar un rico deayuno</p>
               <p class="cardstext">Estos son algunos de los desayunos que vendemos:</p>
               <ol class="cardstext">
                  <li>Huevos con jamon</li>
                  <li>Club Sandwich</li>
                  <li>Coctel de frutas</li>
                  <li>Hot Cakes acompañados con huevo y tocino</li>
               </ol>
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <img src="images/huevosconjamon.png" id="huevos" width="200px" height="200px">
                     </div>
                     <div class="col-md-3">
                        <img src="images/hotcakes.jpg" id="hotcakes" width="200px" height="200px">
                     </div>
                     <div class="col-md-3">
                        <img src="images/clubsandwich.png" id="sandwich" width="200px" height="200px">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <br>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="card" id="centrarcard" style="width: 18rem;">
               <img class="card-img-top" src="images/logoCafeteria.png.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto">Este es el logo de mi negocio, mi negocio es sobre una cafeteria, la cual tiene como nombre: Coffes Martinez.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card" id="centrarcard1" style="width: 18rem;">
               <img class="card-img-top" src="images/frappe.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto1">En la cafeteria de Coffes Martinez, vendemos bebidas frias como los frappes</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card" id="centrarcard2" style="width: 18rem;">
               <img class="card-img-top" src="images/cafecaliente.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto2">En la cafeteria de Coffes Martinez, aparte de preparar bebidas frias, tambien preparamos bebidas calientes.</p>
               </div>
            </div>
         </div>
      </div>
      <br>

      <div class="row">
         <div class="col-md-4">
            <div class="card" id="centrarcard3" style="width: 18rem;">
               <img class="card-img-top" src="images/cafetipo.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto3">Estos son algunos de los cafes que tenemos por el momento.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card" id="centrarcard4" style="width: 18rem;">
               <img class="card-img-top" src="images/pastel.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto4">En la cafeteria de Coffes Martinez, aparte de las bebidas, tambien vendemos postres.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card" id="centrarcard5" style="width: 18rem;">
               <img class="card-img-top" src="images/fondo4.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto5">Estos son algunos ejemplos de los postres que vendemos en nuestra cafeteria.</p>
               </div>
            </div>
         </div>
      </div>
      <br>
      
      <div class="row">
         <div class="col-md-4">
            <div class="card" id="centrarcard6" style="width: 18rem;">
               <img class="card-img-top" src="images/panes.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto6">En nuestra cafeteria aparte de vender postres, tambien vendemos panes, como conchas, hojaldras, entre otros.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card" id="centrarcard7" style="width: 18rem;">
               <img class="card-img-top" src="images/huevosconjamon.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto7">En la cafeteria vendemos desayunos por si algun cliente quiere disfrutar de un rico desayuno.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card" id="centrarcard8" style="width: 18rem;">
               <img class="card-img-top" src="images/cereal.png" alt="Card image cap">
               <div class="card-body">
                  <p class="card-text" id="colortexto8">En la cafeteria vendemos desayunos saludables por si algun cliente quiere ordenar algo nutritivo.</p>
               </div>
            </div>
         </div>
      </div>  
   </div>
   <br>

_GUEST;
   }
?>


