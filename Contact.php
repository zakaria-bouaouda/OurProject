<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMI Shop</title>
<link rel="icon" type="iamge/png" href="img\logoo.png" />

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
<!-- Contact Us Section -->
<form id="contactUs" action="FormTraitment.php" method="POST">

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
  </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Your Subject</label>
      <input type="text" class="form-control" name="subject">
    </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Your message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txt"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      <!-- FOOTER -->
      <?php include("footer.php"); ?>
    </main>
    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
