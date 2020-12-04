<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Shop</title>

    <!-- Our Js -->
    <script src="js/javascript.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="js/bootstap.bundle.min.js"></script>
    <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css.css">
</head>
<body>
    <!-- we will use directly bootstrap for this front end part -->
        <!-- this is our navbar -->
        <?php include("menu.php"); ?>
    <!-- this is the section for items -->
                    <!-- Carousel part -->
    <main role="main">

<!-- Our carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
      <div class="container">
        <div class="carousel-caption text-left">
         
          <h4> Soyez le Bienvenue dans notre shop </h4>
          <p><a class="btn btn-lg btn-primary" href="Inscription.php" role="button">S'inscrire aujourd'hui</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item" >
      <svg class="bd-placeholder-img" width="100%" height="10%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
      <div class="container">
        <div class="carousel-caption">
          <h4> Ne rattez pas les promotion de black friday ! </h4>
          <p><a class="btn btn-lg btn-primary" href="promotion.php" role="button">savoir plus</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
      <div class="container">
        <div class="carousel-caption text-right">
          <h4> Si vous voulez nous contacter , n'hesitez pas ! </h4>
          <p><a class="btn btn-lg btn-primary" href="Contact.php" role="button">Contactez nous</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Our three categories -->

<div class="container-marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row firstIMG" >
    <div class="col-lg-4 ">
      <img src=" img\children1.png" width="80%" alt="Avatar">
      <h2>Les enfants</h2>
      <p>Trouvez des produits de haute avec un tres bon prix pour vos enfants </p>
      <p><a class="btn btn-secondary" href="childrenCatalogue.php" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src=" img\man.png" width="40%" alt="Avatar">
      <h2>Les Hommes</h2>
      <p>c'est l'hiver , il fait froid , ne rattez pas la promotion </p>
      <p><a class="btn btn-secondary" href="MenCatalogue.php" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src=" img\women1.png" width="40%" alt="Avatar">
      <h2>Les femmes</h2>
      <p>les meilleurs produit de maquillage , la beaute  </p>
      <p><a class="btn btn-secondary" href="WomensCatalogues.php" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
       <div id="acceuilProducts">
        <!-- START THE FEATURETTES -->
    
         <br class="featurette-divider">
     
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Hugu Boss , le parfum des BOSS. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Eau de parfum pour Hommes avec des promotion exclusive pour les boites de 100ml qui vont jusqu'a 50% !! 
              A NE PAS RATTER.
            on a une large gamme des parfumes Hugu Boss , Livraison Locale gratuite ,</p>
          </div>
          <div class="col-md-5">
            <img src=" img\parfumhomme.jpg" width="90%"  > 
          </div>
        </div>
    
        <hr class="featurette-divider">
 
        <!-- /END THE FEATURETTES -->
      
      </div><!-- /.container -->
    
    
      <!-- FOOTER -->
      <?php include("footer.php"); ?>
    </main>
    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>