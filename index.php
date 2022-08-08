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
  <link type="text/css" rel="stylesheet" href="styles/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" media="screen,projection">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript" src="scripts/jquery.js"></script>
  <script type="text/javascript" src="scripts/jquery-wrapper.js"></script>

  <script type="text/javascript" src="scripts/materialize.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.parallax').parallax();
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav();
    $('select').formSelect();
  });
  </script>
</head>

  <body>

    <?php include 'templates/header.inc.php'; ?>

    <div class="">
      <div class="parallax-container">
        <div class="parallax"><img src="public/images/Germany2.jpg" alt="Neuschwanstein"></div>
     </div>

     <div class="section white row">
       <div class="">
         <h2 class="header center-align">Willkommen auf der "Deutsch-Plattform"!</h2>
         <h6 class="grey-text text-darken-3 lighten-3 center-align">Hier kannst du Deutsch lernen, hören, praktizieren, Informationen über Deutschland und seine Kultur bekommen und dich auf Tests vorbereiten. </h6>
         <h6 class="grey-text text-darken-3 lighten-3 center-align"> Wir wünschen dir viel Spass! </h6>
       </div>
       <br>
       <div class="container">
         <hr>
       </div>
       <div class="col s12 m6 l6 xl3">
         <p class="grey-text text-darken-3 lighten-3 center-align">Hier kannst du deinen Wortschatz verbessern und Vokabeln üben. Bereite dich auf Tests vor!</p>
         <p class="center-align"> <a href="view/ejercicios.php" class="waves-effect waves-light btn-large red darken-3"><i class="material-icons left">spellcheck</i>Übungen</a> </p>
       </div>
       <div class="col s12 m6 l6 xl3">
         <p class="grey-text text-darken-3 lighten-3 center-align">Hier kannst du Geschichten hören und Übungen dazu machen. Beantworte die interaktiven Fragen und praktiziere dein Deutsch.</p>
         <p class="center-align"> <a href="view/audiolibros.php" class="waves-effect waves-light btn-large red darken-3"><i class="material-icons left">volume_up</i>Hörbücher</a> </p>
       </div>
       <div class="col s12 m6 l6 xl3">
         <p class="grey-text text-darken-3 lighten-3 center-align">Hier kannst du interaktive Übungen zur deutschen Kultur machen und deinen Wortschatz verbessern.</p>
         <p class="center-align"> <a class="waves-effect waves-light btn-large red darken-3 dropdown-trigger" data-target='dropdown3'><i class="material-icons left">arrow_drop_down</i>Kulturkapseln</a> </p>
       </div>
       <div class="col s12 m6 l6 xl3">
         <p class="grey-text text-darken-3 lighten-3 center-align">Hier findest du Informationen zu Deutschland, über Universitäten und Stipendien.</p>
         <p class="center-align"> <a href="view/links.php" class="waves-effect waves-light btn-large red darken-3"><i class="material-icons left">web</i>Webseiten</a> </p>
       </div>
     </div>

     <div class="row">
       <div class="col s12 m12 l6 push-l6">
         <h3 class="center-align">Reiseland Deutschland</h3>
         <p class="center-align"> Hier findest du viele Informationen über Deutschland für Touristen als Reiseland.</p>
       </div>
       <div class="col s12 m12 l6 pull-l6">
         <iframe class="main_video" title="Reiseland Deutschland" src="https://www.youtube.com/embed/2qG9iC2iPDM?controls=1"> </iframe>
       </div>
     </div>

     <div class="row">
       <div class="col s12 m12 l6">
         <h3 class="center-align">Touristen attraktionen in Deutschland</h3>
         <p class="center-align"> Auf diesem Video kannst du viele Touristenattraktionen in Deutschland aus der Vogelperspektive sehen.</p>
       </div>
       <div class="col s12 m12 l6">
         <iframe class="main_video" title="Touristen attraktionen in Deutschland" src="https://www.youtube.com/embed/vp4iUwArXGA?controls=1"> </iframe>
       </div>
     </div>

     <div class="parallax-container">
       <div class="parallax"><img src="public/images/Germany3.jpg" alt="brandenburger tor"></div>
     </div>
    </div>

    <?php include 'templates/footer.inc.php'; ?>

  </body>
</html>
