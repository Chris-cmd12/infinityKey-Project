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
  <title>Panier</title>
</head>

<body>
  <!-- lien vers la navbar-->
  <?php  require'navbar1.0.php';?>
  <article>
    <!--affichage des articles dans le panier-->
    <div class="container produit">

      <?php
         
            $requete = "SELECT * FROM panier ";

            if($resultat = mysqli_query($connect,$requete)){
              while($ligne = mysqli_fetch_assoc($resultat)){

                  $idp=$ligne['id_panier']  ;              
                  echo"<hr>";
                  echo"<div class='row'>";
                    echo"<div class='col'>";
                    echo"<img src='img/game/".$ligne['image']."' width='47px' height='65px'>";
                    echo"</div>";
                    echo"<div class='col'>";
                      echo"".$ligne['name']."";
                    echo"</div>";
                    echo"<div class='col'>";
                      echo"".$ligne['price']." €";
                    echo"</div>";
                    echo"<div class='col'>";
                      echo "<form action='' method='POST'>";
                      echo"<button class='btn' name='supprimer' value=$idp onClick='suppr()'>Supprimer</button>";
                      echo "<form/>";
                    echo"</div>";
                  echo"</div>";
                  echo"<hr>";
                
              }
            }
         
            if(isset($_POST['supprimer'])){ 
              $id=$_POST['supprimer'];
              $requete = "DELETE FROM panier ";
              $requete .=" Where id_panier =$id"; 
              $resultat = mysqli_query($connect,$requete);   
              header("Refresh:0; url=panier.php");  
            }
        
        ?>

      <?php
            $requete= "SELECT SUM(price) as sum FROM panier ";
            if($resultat = mysqli_query($connect,$requete)){
            while($sum = mysqli_fetch_assoc($resultat)){
              echo"<div class='col'>";
              echo"<p>"."prix total: ".sprintf('%.2f',$sum['sum'])." €</p>";
              echo"</div>";
              }
            }
            
            ?>



    </div>

    </div>


    </div>


    </div>
  </article>
  <?php require "lienscript.php"; ?>
  <script src="js/panier.js"></script>
</body>

</html>