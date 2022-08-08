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
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
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
      <h2 class="center-align">Kulturkapseln</h2>
    </div>

    <div class="row">
      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula1.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula1.png" alt="Kulturkapsel Buchmesse Frankfurt - A1"> </a>
        <h6 class="center-align">Buchmesse Frankfurt - A1</h6>
      </div>
      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula2.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula2.png" alt="Zug fahren -  A1"> </a>
        <h6 class="center-align">Zug fahren -  A1</h6>
      </div>

      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula3.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula3.png" alt="Kulturkapsel Deutsche Spezialitäten - A1"> </a>
        <h6 class="center-align">Deutsche Spezialitäten - A1</h6>
      </div>
      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula4.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula4.png" alt="Kulturkapsel Feste aktuell - A1"> </a>
        <h6 class="center-align">Feste aktuell - A1</h6>
      </div>

      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula5.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula5.png" alt="Das Fahrrad - A1"> </a>
        <h6 class="center-align">Das Fahrrad - A1</h6>
      </div>
      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula6.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula6.png" alt="Leutturm Strandkorb - A1"> </a>
        <h6 class="center-align">Leutturm Strandkorb - A1</h6>
      </div>

      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula7.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula7.png" alt="Regeln - A1"> </a>
        <h6 class="center-align">Regeln - A1</h6>
      </div>
      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula8.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula8.png" alt="Der Froschkönig - A2"> </a>
        <h6 class="center-align">Der Froschkönig - A2</h6>
      </div>

      <div class=" col s12 m6 l4 xl4" style="margin-top:1.5%">
        <a href="capsulas/capsula9.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula9.png" alt="Kulturkapsel Deutsche Literatur - A2"> </a>
        <h6 class="center-align">Deutsche Literatur - A2</h6>
      </div>
      <div class=" col s12 m6 l4  push-l2 xl4 push-xl2" style="margin-top:1.5%">
        <a href="capsulas/capsula10.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula10.png" alt="kulturkapsel Erfindungen - A2"> </a>
        <h6 class="center-align">Erfindungen - A2</h6>
      </div>

      <div class=" col s12 m6 push-m3 l4 push-l2 xl4 push-xl2" style="margin-top:1.5%">
        <a href="capsulas/capsula11.php"> <img  class="circle responsive-img hoverable" src="../public/images/capsula11.png" alt="Rumpelstilzchen - A2"> </a>
        <h6 class="center-align">Rumpelstilzchen - A2</h6>
      </div>
    </div>


    <?php include '../templates/footer.inc.php'; ?>

      </body>
    </html>
