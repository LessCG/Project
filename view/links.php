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

     <!-- Dropdown index btn Structure -->
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
      <h2 class="center-align">Support-Links</h2>
    </div>

    <!-- First couple links -->
    <div class="row">
      <div class="card col s12 m6 l4 xl4 hoverable">
        <div class="card-image waves-effect waves-block waves-light hoverable">
          <a href="links/link1.php"> <img class="hoverable" src="../public/images/link1.jpg" alt="Landeskunde"> </a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Landeskunde</span>
          <p><a href="links/link1.php">Ver links</a></p>
        </div>
      </div>

      <div class="card col s12 m6 l4 xl4 hoverable">
        <div class="card-image waves-effect waves-block waves-light hoverable">
          <a href="links/link2.php"> <img class="hoverable" src="../public/images/link2.jpg" alt="Jugendliche"> </a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Jugendliche</span>
          <p><a href="links/link2.php">Ver links</a></p>
        </div>
      </div>

    <!-- Second couple links -->
      <div class="card col s12 m6 l4 xl4 hoverable">
        <div class="card-image waves-effect waves-block waves-light hoverable">
          <a href="links/link3.php"> <img class="hoverable" src="../public/images/link3.jpg" alt="Lesetexte"> </a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Lesetexte</span>
          <p><a href="links/link3.php">Ver links</a></p>
        </div>
      </div>

      <div class="card col s12 m6 l4 xl4 hoverable">
        <div class="card-image waves-effect waves-block waves-light hoverable">
          <a href="links/link4.php"> <img class="hoverable" src="../public/images/link4.jpg" alt="Hörtipps"> </a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Hörtipps</span>
          <p><a href="links/link4.php">Ver links</a></p>
        </div>
      </div>

    <!-- Third couple links -->
      <div class="card col s12 m6 l4 xl4 hoverable">
        <div class="card-image waves-effect waves-block waves-light hoverable">
          <a href="links/link5.php"> <img class="hoverable" src="../public/images/link5.jpg" alt="Leseverstehen"> </a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Leseverstehen</span>
          <p><a href="links/link5.php">Ver links</a></p>
        </div>
      </div>

      <div class="card col s12 m6 l4 xl4 hoverable">
        <div class="card-image waves-effect waves-block waves-light hoverable">
          <a href="links/link6.php"> <img class="hoverable" src="../public/images/link6.jpg" alt="Stipendien"> </a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Stipendien</span>
          <p><a href="links/link6.php">Ver links</a></p>
        </div>
      </div>

    <!-- Last link -->
      <div class="card col s12 m12 l6 offset-l3 xl6 offset-xl3 hoverable">
        <div class="card-image waves-effect waves-block waves-light hoverable">
          <a href="links/link7.php"> <img class="hoverable" src="../public/images/link7.jpg" alt="Studieren in Deutschland"> </a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Studieren in Deutschland</span>
          <p><a href="links/link7.php">Ver links</a></p>
        </div>
      </div>
    </div>

    <?php include '../templates/footer.inc.php'; ?>

      </body>
    </html>
