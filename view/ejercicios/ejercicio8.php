<!DOCTYPE html>
<html lang="de">
<head>
  <title>Deutsche Plattform</title>
  <meta charset="utf-8">
  <meta name="description" content="Free Deutsche Übungen">
  <meta name="keywords" content="Deutsch, learn, curse, UAEH">
  <meta name="author" content="Erick Martínez">

  <!--Import Google Icon Font-->
  <link async href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link async href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/style.css">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../../styles/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="../../styles/styles.css" media="screen,projection">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript" src="../../scripts/jquery.js"></script>
  <script type="text/javascript" src="../../scripts/jquery-wrapper.js"></script>

  <script type="text/javascript" src="../../scripts/materialize.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
  });
  </script>
</head>

  <body>
    <ul class="sidenav" id="mobile-nav" style="background-color:#800101">
      <li><a href="../../index.php" class="white-text">Inicio</a></li>
      <li><a href="../ejercicios.php" class="white-text">Ejercicios</a></li>
      <li><a href="../audiolibros.php" class="white-text">Audiolibros</a></li>
      <li><a href="#" class="white-text dropdown-trigger" data-target='dropdown2'>Cultura <i class="material-icons right white-text">arrow_drop_down</i> </a></li>
      <li><a href="../links.php" class="white-text"> Links </a></li>
     </ul>

    <!-- Navbar goes here -->
    <header>
        <section class="navbar-fixed">
        <nav style="background-color:#800101">
          <div class="nav-wrapper">
              <a href="#" class="brand-logo"> <img src="../../public/images/flag2.png" alt="German flag" style="width:65px; margin:15%"> </a>

              <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                   <i class="material-icons">menu</i>
              </a>

              <ul id="" class="right hide-on-med-and-down">
                <li><a href="../../index.php" class="white-text">Inicio</a></li>
                <li><a href="../ejercicios.php" class="white-text">Ejercicios</a></li>
                <li><a href="../audiolibros.php" class="white-text">Audiolibros</a></li>
                <li><a href="#" class="white-text dropdown-trigger" data-target='dropdown1'>Cultura <i class="material-icons right">arrow_drop_down</i> </a></li>
                <li><a href="../links.php" class="white-text"> Links </a></li>
              </ul>
          </div>

          <ul id='dropdown1' class='dropdown-content' style="background-color:#800101">
            <li><a href="../capsulas.php" class="white-text">Cápsulas</a></li>
            <li><a href="../musica.php" class="white-text">Música</a></li>
          </ul>

          <ul id='dropdown2' class='dropdown-content' style="background-color:#800101">
            <li><a href="../capsulas.php" class="white-text">Cápsulas</a></li>
            <li><a href="../musica.php" class="white-text">Música</a></li>
          </ul>

        </nav>
      </section>
    </header>

    <div class="row">
    </div>

    <div id="body">
          <div id="quiz">
            <h1 id="title">Title</h1>
            <hr>
                <div id="navegationButtonsContainer"></div>
                <div id="container"></div>
                <div id="actionButtonsContainer"></div>
                <hr>
                
                <footer>
                    <h3 id="progress">Progress</h3>
                </footer>
            </div>
      <!-- Scripts-->
      <script src="./app.js" type="module" ></script>
      <script type="text/javascript">
        var idQuestions = 8;
      </script>
    </div>

    <div class="row">
      <p class="center-align"> <a href="../ejercicios.php" class="waves-effect waves-light btn-large" style="background-color:#ce9d00"><i class="material-icons left">spellcheck</i>Volver a ejercicios</a> </p>
    </div>



    <?php include '../../templates/footer.inc.php'; ?>

      </body>
    </html>
