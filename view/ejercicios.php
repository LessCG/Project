<!DOCTYPE html>
<html lang="de">
<head>
  <title>Deutsche Plattform</title>
  <meta charset="utf-8">
  <meta name="description" content="Free Deutsche material">
  <meta name="keywords" content="Deutsch, learn, curse, UAEH">
  <meta name="author" content="Erick Martínez">

  <!--Import Google Icon Font-->
  <link async href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link async href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../styles/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="../styles/styles.css" media="screen,projection">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript" src="../scripts/jquery.js"></script>
  <script type="text/javascript" src="../scripts/jquery-wrapper.js"></script>

  <script type="text/javascript" src="../scripts/materialize.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav();
  });
  </script>
</head>

  <body>
    <!-- Dropdown sidenav Structure -->
    <ul class="sidenav" id="mobile-nav" style="background-color:#800101">
      <li><a href="../index.php" class="white-text">Inicio</a></li>
      <li><a href="ejercicios.php" class="white-text">Ejercicios</a></li>
      <li><a href="audiolibros.php" class="white-text">Audiolibros</a></li>
      <li><a href="#" class="white-text dropdown-trigger" data-target='dropdown2'>Cultura <i class="material-icons right white-text">arrow_drop_down</i> </a></li>
      <li><a href="links.php" class="white-text"> Links </a></li>
     </ul>

     <!-- Dropdown btn Structure -->
    <ul id='dropdown3' class='dropdown-content'>
      <li class="red darken-3 white-text"><a href="#!" class="white-text"><i class="material-icons left white-text">view_module</i>Cápsulas</a></li>
      <li class="divider red darken-3" tabindex="-1"></li>
      <li class="red darken-3 white-text"><a href="#!" class="white-text"><i class="material-icons left white-text">cloud</i>Música</a></li>
    </ul>

    <!-- Navbar goes here -->
    <header>
        <section class="navbar-fixed">
        <nav style="background-color:#800101">
          <div class="nav-wrapper">
              <a href="#" class="brand-logo"> <img src="../public/images/flag2.png" alt="German flag" style="width:65px; margin:15%"> </a>

              <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                   <i class="material-icons">menu</i>
              </a>

              <ul id="" class="right hide-on-med-and-down">
                <li><a href="../index.php" class="white-text">Inicio</a></li>
                <li><a href="ejercicios.php" class="white-text">Ejercicios</a></li>
                <li><a href="audiolibros.php" class="white-text">Audiolibros</a></li>
                <li><a href="#" class="white-text dropdown-trigger" data-target='dropdown1'>Cultura <i class="material-icons right">arrow_drop_down</i> </a></li>
                <li><a href="links.php" class="white-text"> Links </a></li>
              </ul>
          </div>

          <ul id='dropdown1' class='dropdown-content' style="background-color:#800101">
            <li><a href="capsulas.php" class="white-text">Cápsulas</a></li>
            <li><a href="musica.php" class="white-text">Música</a></li>
          </ul>

          <ul id='dropdown2' class='dropdown-content' style="background-color:#800101">
            <li><a href="capsulas.php" class="white-text">Cápsulas</a></li>
            <li><a href="musica.php" class="white-text">Música</a></li>
          </ul>

        </nav>
      </section>
    </header>

    <div class="container">
      <h2 class="center-align">Deutsch-übungen A1</h2>
    </div>

    <!-- First tertiary exercises -->
    <div class="row">
      <div class="flip-box col s12 m6 l4 xl4">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="../public/images/ejercicio1.jpg" alt="Arbeit, Beruf, Schule" style="width:100%;height:250px">
          </div>
          <div class="flip-box-back">
            <h4>Arbeit, Beruf, Schule</h4>
            <a href="ejercicios/ejercicio1.php" class="">Iniciar ejercicio</a>
          </div>
       </div>
     </div>

     <div class="flip-box col s12 m6 l4 xl4">
       <div class="flip-box-inner">
         <div class="flip-box-front">
           <img src="../public/images/ejercicio2.jpg" alt="Bank, Post, Telefon" style="width:100%;height:250px">
         </div>
         <div class="flip-box-back1">
           <h4>Bank, Post, Telefon</h4>
           <a href="ejercicios/ejercicio2.php" class="">Iniciar ejercicio</a>
         </div>
      </div>
    </div>

    <div class="flip-box col s12 m6 l4 xl4">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="../public/images/ejercicio3.jpg" alt="Einkaufen" style="width:100%;height:250px">
        </div>
        <div class="flip-box-back2">
          <h4>Einkaufen</h4>
          <a href="ejercicios/ejercicio3.php" class="">Iniciar ejercicio</a>
        </div>
     </div>
   </div>

    <!-- Second tertiary exercises -->
      <div class="flip-box col s12 m6 l4 xl4">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="../public/images/ejercicio4.jpg" alt="Essen und Trinken" style="width:100%;height:250px">
          </div>
          <div class="flip-box-back">
            <h4>Essen und Trinken</h4>
            <a href="ejercicios/ejercicio4.php" class="">Iniciar ejercicio</a>
          </div>
       </div>
     </div>

     <div class="flip-box col s12 m6 l4 xl4">
       <div class="flip-box-inner">
         <div class="flip-box-front">
           <img src="../public/images/ejercicio5.jpg" alt="Freizeit, Hobby" style="width:100%;height:250px">
         </div>
         <div class="flip-box-back1">
           <h4>Freizeit, Hobby</h4>
           <a href="ejercicios/ejercicio5.php" class="">Iniciar ejercicio</a>
         </div>
      </div>
    </div>

    <div class="flip-box col s12 m6 l4 xl4">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="../public/images/ejercicio6.jpg" alt="Ich und die anderen" style="width:100%;height:250px">
        </div>
        <div class="flip-box-back2">
          <h4>Ich und die anderen</h4>
          <a href="ejercicios/ejercicio6.php" class="">Iniciar ejercicio</a>
        </div>
     </div>
   </div>


    <!-- Third tertiary exercises -->
      <div class="flip-box col s12 m6 l4 xl4">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="../public/images/ejercicio7.jpg" alt="Kleidung" style="width:100%;height:250px">
          </div>
          <div class="flip-box-back">
            <h4>Kleidung</h4>
            <a href="ejercicios/ejercicio7.php" class="">Iniciar ejercicio</a>
          </div>
       </div>
     </div>

     <div class="flip-box col s12 m6 l4 xl4">
       <div class="flip-box-inner">
         <div class="flip-box-front">
           <img src="../public/images/ejercicio8.jpg" alt="Körper, Gesundheit" style="width:100%;height:250px">
         </div>
         <div class="flip-box-back1">
           <h4>Körper, Gesundheit</h4>
           <a href="ejercicios/ejercicio8.php" class="">Iniciar ejercicio</a>
         </div>
      </div>
    </div>

    <div class="flip-box col s12 m6 l4 xl4">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="../public/images/ejercicio9.jpg" alt="Mit dem Auto, mit dem Zug, zu Fuß" style="width:100%;height:250px">
        </div>
        <div class="flip-box-back2">
          <h4>Mit dem Auto, mit dem Zug, zu Fuß</h4>
          <a href="ejercicios/ejercicio9.php" class="">Iniciar ejercicio</a>
        </div>
     </div>
   </div>


    <!-- Fourth tertiary exercises -->
      <div class="flip-box col s12 m6 l4 xl4">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="../public/images/ejercicio10.jpg" alt="Reisen" style="width:100%;height:250px">
          </div>
          <div class="flip-box-back">
            <h4>Reisen</h4>
            <a href="ejercicios/ejercicio10.php" class="">Iniciar ejercicio</a>
          </div>
       </div>
     </div>

     <div class="flip-box col s12 m6 l4 xl4">
       <div class="flip-box-inner">
         <div class="flip-box-front">
           <img src="../public/images/ejercicio11.jpg" alt="Termine, Verabredungen" style="width:100%;height:250px">
         </div>
         <div class="flip-box-back1">
           <h4>Termine, Verabredungen</h4>
           <a href="ejercicios/ejercicio11.php" class="">Iniciar ejercicio</a>
         </div>
      </div>
    </div>

    <div class="flip-box col s12 m6 l4 xl4">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="../public/images/ejercicio12.jpg" alt="Wohnen" style="width:100%;height:250px">
        </div>
        <div class="flip-box-back2">
          <h4>Wohnen</h4>
          <a href="ejercicios/ejercicio12.php" class="">Iniciar ejercicio</a>
        </div>
     </div>
   </div>
  </div>


<?php include '../templates/footer.inc.php'; ?>

  </body>
</html>
