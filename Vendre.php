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
<!-- Inscription Section -->
<form id="Sing">
  <h1>Section d'identification du vendeur</h1>
    <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
  <div class="form-group">
    <label for="inputAddress">Addresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress">Telephone</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="+2126********">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="inputCity">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Pays</label>
      <input type="text" class="form-control" id="inputPays">
    </div>
  </div>
  <div class="form-group">
      <label for="inputZip">No de Votre Carte d'Identite(CIN ou passe-port)</label>
      <input type="text" class="form-control" id="inputPays">
    </div>

  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Choisir une photo recto verso pour votre carte d'identite ou votre passe-port</label>
</div>

<br>

<h1>Section d'identification du produit</h1>
<div class="form-group">
      <label for="exampleFormControlInput1">Nome du produit</label>
      <input type="text" class="form-control" name="subject">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">description courte du produit</label>
      <input type="text" class="form-control" name="subject">
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> description detaille du produit</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txt"></textarea>
  </div>

  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Veuillez Choisir une photo reel de votre produit </label>
</div>
<br>
<br>

      <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      <a href="CGU.php">j'accepte Les Conditions Generale d'Utilisation(CGU)<br></a>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
      <!-- FOOTER -->
      <?php include("footer.php"); ?>
    </main>

    <!-- bootstap Js -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
