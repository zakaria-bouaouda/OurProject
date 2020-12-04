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
<!-- About Us Section -->
<div class="row">
<div class="col-md-3 col-sm-6">
  <div class="card" style="width: 18rem; background-color: rgb(112, 196, 235);">
    <img src="img/children.png" class="card-img-top avatar" id="ourtoofs" alt="avatar">
    <div class="card-body">
      <p class="card-text" style="font-weight: bold;">EL OUAHABI REDA , 2nd Year Student in Software engineering </p>
    </div>
  </div>
</div>

<div class="col-md-3 col-sm-6">
  <div class="card" style="width: 18rem; background-color: rgb(252, 126, 195);">
   <img src="img/children.png" class="card-img-top avatar" id="ourtoofs" alt="avatar">
    <div class="card-body">
      <p class="card-text">FATIMA EZZAHRAE CHAHID , 2nd Year Student in Software engineering </p>
    </div>
  </div>
</div>

<div class="col-md-3 col-sm-6">
  <div class="card" style="width: 18rem; background-color: rgb(112, 196, 235);">
    <img src="img/children.png" class="card-img-top avatar" id="ourtoofs" alt="avatar">
    <div class="card-body">
      <p class="card-text" style="font-weight: bold;">BOUAOUDA ZAKARIA , 2nd Year Student in Software engineering </p>
    </div>
  </div>
</div>


<div class="col-md-3 col-sm-6">
  <div class="card" style="width: 18rem; background-color: rgb(252, 126, 195);">
   <img src="img/children.png" class="card-img-top avatar" id="ourtoofs" alt="avatar">
    <div class="card-body">
      <p class="card-text">FATIMA EZZAHRAE EL ACHHAB , 2nd Year Student in Software engineering </p>
    </div>
  </div>
</div>
</div>
    
      <!-- FOOTER -->
      <?php include("footer.php"); ?>
    </main>
    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>