<?php include('./include/header.inc.php'); ?>
  <nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
    <div class="container">
      <!-- left nav top -->
      <ul class="nav navbar-nav pull-left">
        <li><a href="#"><span class="text-white">Un Logo Ici</span></a></li>
      </ul>
      <!-- right nav top -->
      <ul class="nav navbar-nav pull-right">
        <li><a href="#" class="text-white">A propos de nous</a></li>
        <li><a href="#" class="text-white">Contactez nous</a></li> 
      </ul>
    </div>
    <div class="dividline light-white"></div>
  </nav>
  <!-- down nav -->
  <nav class="navbar navbar-down">
    <div class="container">
      <div class="flex-container">  
        <div class="navbar-header flex-item">
          <div class="navbar-brand text-white" href="#">MARSEILLE</div>
        </div>
        <ul class="nav navbar-nav flex-item hidden-xs ">
          <li><a class="text-white" href="#">Accueil</a></li>
          <li><a class="text-white" href="#">autre</a></li> 
          <li><a class="text-white" href="#">autre</a></li> 
        </ul>
      </div>
    </nav>
  </nav> 
  
    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 class="shadow-t" id="homeHeading">Marseille une ville éblouissante.</h1>
          <hr class="blue">
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Voir plus!</a>
        </div>
        <br> <br> <br>
        <img class="img100" src="./asset/images/scroll-down.gif">
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            
            <h2 class="section-heading text-white">Le vieux port de Marseille.</h2>
            <hr class="light">
            <p class="text-faded">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dapibus ipsum sed nisl elementum, non vulputate risus lobortis. Suspendisse posuere massa non ligula tempor rutrum. Mauris non dui orci. Vivamus tincidunt rhoncus tincidunt. Nam tempor eleifend dui. Vivamus felis metus, euismod vel sodales a, consectetur non lorem. Nunc sed ante non ligula vehicula scelerisque. Donec quis sollicitudin diam. Praesent volutpat mauris nulla, a rhoncus augue molestie eu.

Vestibulum sollicitudin mollis lacus, quis ullamcorper felis. Vestibulum magna diam, iaculis sit amet sodales vitae, mollis id dui. Cras vitae accumsan tellus. Proin sed lacus vehicula, commodo metus in, tristique ante. Cras laoreet risus enim, eget tristique libero laoreet quis. Cras a velit est. Ut quis magna fermentum, rhoncus sem in, malesuada lacus. Aliquam consequat velit at nisi sodales tincidunt.!</p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Voir plus!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Les activités :</h2>
            <hr class="blue">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              <h3>Rhoncus</h3>
              <p class="text-muted">Nunc sed ante non ligula vehicula scelerisque. Donec quis sollicitudin diam. Praesent volutpat mauris nulla.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Augue</h3>
              <p class="text-muted">Nunc sed ante non ligula vehicula scelerisque. Donec quis sollicitudin diam. Praesent volutpat mauris nulla!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              <h3>Tales</h3>
              <p class="text-muted">WNunc sed ante non ligula vehicula scelerisque. Donec quis sollicitudin diam. Praesent volutpat mauris nulla</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              <h3>Incro</h3>
              <p class="text-muted">Nunc sed ante non ligula vehicula scelerisque. Donec quis sollicitudin diam. Praesent volutpat mauris nulla!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include('./include/footer.inc.php'); ?>