<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link href="css/style.css" rel="stylesheet" />
  <title>PC</title>
</head>

<body>
  <?php  require'navbar1.0.php';?>
  <article>
    <div class="container produit">
      <div class="row">
        <?php
          

          $requete = "SELECT * FROM products ";
          $requete .="WHERE platform='PLAYSTATION'";

          if($resultat = mysqli_query($connect,$requete)){
            while($ligne = mysqli_fetch_assoc($resultat)){
              $name=$ligne['name'];
              $image=$ligne['image'];
              $price=$ligne['price'];
              $idp=$ligne['id_products'];
              echo"<div class='col'>";
              echo"<img src='img/game/".$image."'>";
              echo"<p>".$name."</p>";
              echo"<p>".$price." €</p>";
              echo "<form action='' method='POST'>";
              echo"<button class='btn' name='panier' value='$idp' onclick='ajout()'> ajouter au panier</button>";
              echo"</form>";
              echo"</div>";
            }
          }

          if(isset($_POST['panier'])){ 
            $id=$_POST['panier'];
    
            $requete = "INSERT INTO panier (id_products, name, price, image) ";
            $requete .= "SELECT id_products, name, price, image FROM products WHERE id_products = $id ";
            $resultat = mysqli_query($connect,$requete);
    
        }
        ?>
      </div>
    </div>
  </article>

  <?php require "lienscript.php"; ?>
  <script src="js/panier.js"></script>

</body>

</html>