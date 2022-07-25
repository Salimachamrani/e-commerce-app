<?php
 session_start();
    require('functions.php');
    $informationsArtisan=informationsArtisan();
    while($row=mysqli_fetch_assoc($informationsArtisan)){
      $artisan_prenom=$row['vendeur_prenom'];
      $artisan_nom=$row['vendeur_nom'];
      $artisan_image=$row['vendeur_nom'];
      $artisan_ville=$row['vendeur_ville'];
      $artisan_num=$row['vendeur_num_tel'];
      $artisan_email=$row['vendeur_email'];


     }
    $value=copierProduit();
    $value1=carouselProduits();

    $value2=copierProduit();
    $row2=mysqli_fetch_assoc($value2);
     $produit_titre=$row2['produit_titre'];

     
    /* $vendeur_nom=$row2['produit_nom'];
     $vendeur_num_tél=$row2['produit_num_tél'];
     $vendeur_email=$row2['produit_email'];
     $vendeur_ville=$row2['produit_ville'];*/
     
     $product_id="";
     /*if(isset($_GET['produit_ID'])){
      $product_id=$_GET['produit_ID'];
     }
     $produits=get_products('',$product_id);
     $resultat=mysqli_fetch_assoc($produits);*/


    
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>produit détails</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style3.css">
    
  </head>
  <body>
 
  <div class="site-wrap">
  <?php include('navbar.php') ;?>


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="shop.php">Bazar</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $produit_titre;?></strong></div>
        </div>
      </div>
    </div>  
   <form action="manageCart.php" method="post">
    <div class="site-section">
      <div class="container">
      <?php
       while($row=mysqli_fetch_assoc($value)){
        ?>     
        <div class="row">
          <div class="col-md-6">
            <img src="../dashboard/dist/assets/img/produits/<?php echo $row['produit_image'] ?>" alt="Image" class="img-fluid" style="width:450px; ">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $row['produit_titre'] ?></h2>
            <p class="mb-4"><?php echo $row['produit_description'] ?> </p>
            <p><strong class="text-primary h4"><?php echo $row['produit_prix'] ?> MAD</strong></p>
           
            
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              
              
            </div>

            </div>
            <p><button  class="buy-now btn btn-sm btn-primary" name="ajouter" type="submit">Ajouter au panier</button></p>
            <input type="hidden" name="nom" value="<?php echo $row['produit_titre'] ?>">
            <input type="hidden" name="prix" value="<?php echo $row['produit_prix'] ?>">
            <input type="hidden" name="image" value="<?php echo $row['produit_image'] ?>">



          
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </form>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Autres Produits</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="nonloop-block-3 owl-carousel">
          <?php
              while($row1=mysqli_fetch_assoc($value1))
              {
            ?>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="../dashboard/dist/assets/img/produits/<?php echo $row1['produit_image'] ?>" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#"><?php echo $row1['produit_titre'] ?></a></h3>
                    <p class="mb-0">Finding perfect t-shirt</p>
                    <p class="text-primary font-weight-bold"><?php echo $row1['produit_prix'] ?> MAD</p>
                  </div>
                </div>
              </div>
              <?php } ?>
            
            
             
           
              
             
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="shop.php">Produits</a></li>
                  <li><a href="cart.php">Mon panier</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Profile</a></li>
                  <li><a href="contact.php">Contacter le vendeur</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Informations de l'artisan</h3>
              <ul class="list-unstyled">
              <li class="nom"><?php echo $artisan_prenom." "?> <?php echo $artisan_nom ?></li>
                <li class="address"><?php echo $artisan_ville ?></li>
                <li class="phone"><a href="<?php echo $artisan_num ?>"><?php echo $artisan_num ?></a></li>
                <li class="email"> <?php echo $artisan_email ?></li>
              </ul>
            </div>

            
          </div>
        </div>
        <div class="row  text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> - ArtisanatShop
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>