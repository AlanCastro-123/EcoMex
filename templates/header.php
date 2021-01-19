<nav class="navbar sticky-top navbar-expand-md navbar-light fondo-verde">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <span class="navbar-text">
        <img src="img/logo.png" alt="LOGO" height="50px" width="50px">
      </span>
    </div>
    <div class="mx-auto order-0">
        <div class="jumbotron-fluid navbar-brand mx-auto">
          <h1 class="text-center">ECO-MEX</h1>
        </div>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsa">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="colapsa">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link text-white">Inicio</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-white">Proyectos</a>
                </li>
                <li class="nav-item">
                  <a href="general_ecocasa_view.php" class="nav-link text-white">Eco-casa</a>
                </li>
                <li class="nav-item">
                  <?php
                    if (!isset($_SESSION['user']))
                    {
                      echo '<a href="#" class="nav-link text-white">Iniciar sesión</a>';
                    }else{
                      echo '<a href="#" class="nav-link text-white">Cerrar sesión</a>';
                    }
                  ?>
                  
                </li>
            </ul>
        </div>
    </div>
</nav>