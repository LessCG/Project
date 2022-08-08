
    <!-- Navbar goes here -->
    <header>

      <!-- Dropdown sidenav Structure -->
      <ul class="sidenav" id="mobile-nav" style="background-color:#800101">
        <li><a href="index.php" class="white-text">Inicio</a></li>
        <li><a href="view/ejercicios.php" class="white-text">Ejercicios</a></li>
        <li><a href="view/audiolibros.php" class="white-text">Audiolibros</a></li>
        <li><a href="#" class="white-text dropdown-trigger" data-target='dropdown2'>Cultura <i class="material-icons right white-text">arrow_drop_down</i> </a></li>
        <li><a href="view/links.php" class="white-text"> Links </a></li>
       </ul>

       <!-- Dropdown btn Structure -->
      <ul id='dropdown3' class='dropdown-content'>
        <li class="red darken-3 white-text"><a href="view/capsulas.php" class="white-text"><i class="material-icons left white-text">import_contacts</i>Cápsulas</a></li>
        <li class="divider red darken-3" tabindex="-1"></li>
        <li class="red darken-3 white-text"><a href="view/musica.php" class="white-text"><i class="material-icons left white-text">music_note</i>Música</a></li>
      </ul>

      <section class="navbar-fixed">
      <nav style="background-color:#800101">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"> <img src="public/images/flag2.png" alt="German flag" style="width:65px; margin:15%"> </a>

            <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                 <i class="material-icons">menu</i>
            </a>

            <ul id="" class="right hide-on-med-and-down">
              <li><a href="index.php" class="white-text">Inicio</a></li>
              <li><a href="view/ejercicios.php" class="white-text">Ejercicios</a></li>
              <li><a href="view/audiolibros.php" class="white-text">Audiolibros</a></li>
              <li><a href="#" class="white-text dropdown-trigger" data-target='dropdown1'>Cultura <i class="material-icons right">arrow_drop_down</i> </a></li>
              <li><a href="view/links.php" class="white-text"> Links </a></li>
            </ul>
        </div>

        <ul id='dropdown1' class='dropdown-content' style="background-color:#800101">
          <li><a href="view/capsulas.php" class="white-text">Cápsulas</a></li>
          <li><a href="view/musica.php" class="white-text">Música</a></li>
        </ul>

        <ul id='dropdown2' class='dropdown-content' style="background-color:#800101">
          <li><a href="view/capsulas.php" class="white-text">Cápsulas</a></li>
          <li><a href="view/musica.php" class="white-text">Música</a></li>
        </ul>

      </nav>
    </section>
    </header>
