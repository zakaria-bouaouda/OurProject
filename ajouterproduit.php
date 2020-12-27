<?php
  if (isset($_POST['submit'])){
    $nomprod=$_POST['innomprod'];
    $quantite=$_POST['inquantite'];
    $prix=$_POST['inprix'];
    $description=$_POST['indescription'];
    $gender=$_POST['gender'];//categorie des produits (genre)
    $image=$_FILES["image"]["tmp_name"];


  

  $bdd=new PDO ('mysql:host=localhost;dbname=dataprojet;charset=utf8','root','');

  $req=$bdd->prepare('insert into produit values(:nom,:q,:pr,:d,:genre,:img)');
  /*$req->execute(array($_FILES["image"]["name"],file_get_contents($_FILES["image"]["tmp_name"])));

  $req->execute(array($_POST['qte'],$_POST['description']));
*/
  $req->bindValue(':nom',$nomprod);
$req->bindValue(':q',$quantite);
$req->bindValue(':pr',$prix);
$req->bindValue(':d',$description);
$req->bindValue(':genre',$gender);//categorie
$req->bindValue(':img',file_get_contents($image));

  $req->execute();
   
}
?>


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
<!-- Inscription Section -->


<form action="" method="POST" enctype="multipart/form-data"id="Sing">

<h1>Ajouter produit</h1>
    <div class="form-group">
      <label for="exampleFormControlInput1">intitulé du produit</label>
      <input type="text" class="form-control" name="innomprod">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">quantité du produit</label>
      <input type="text" class="form-control" name="inquantite">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">prix du produit</label>
      <input type="text" class="form-control" name="inprix">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">description du produit</label>
      <input type="text" class="form-control" name="indescription">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">categorie du produit</label>

      <select name='gender'>
        <option value=""> --select--</option>
        <option value="vetement Homme"> vetement homme</option>
        <option value="vetement Femme">vetement femme</option>
        <option value="vetement Enfant">vetement enfant</option>

      </select><br>

      
    </div>
    <br>
    <br>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="image">
      <label class="custom-file-label" for="customFile">Veuillez Choisir une photo reel de votre produit </label>
    </div>

 <br>
<br>

      <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      <a href="CGU.html">j'accepte Les Conditions Generale d'Utilisation(CGU)<br></a>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
        

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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