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
   $artisan_email=$row['vendeur_email'];}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ckeckout</title>
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

    <link rel="stylesheet" href="css/style2.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php include('navbar.php') ;?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="shop.php">Bazar</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Panier</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Caisse</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
     
      <form action="caisse.php" method="post"> 
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Détails de Facturation</h2>
            <div class="p-3 p-lg-5 border">
             
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Prenom <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname" required>
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Nom <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                </div>
              </div>

             

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Adresse <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" required >
                </div>
              </div>

             

              

              <div class="form-group row ">
              
                <div class="col-md-12">
                  <label for="c_phone" class="text-black">Numéro de télephone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" required>
                 
                  <div class="form-check" style="margin-top:20px;">
                    <input class="form-check-input" type="radio" name="pay_mode" value="cash" id="flexRadioDefault2" checked>
                    <label style="color:black;" for="flexRadioDefault2">
                    paiement à la livraison
                    </label>
                  </div>                </div>
              </div>

              <div class="form-group">
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                    <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                    <div class="form-group">
                      <label for="c_account_password" class="text-black">Account Password</label>
                      <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">

                  

                    

                   

                   


                    <div class="form-group row mb-5">
                      
                    </div>

                  </div>

                </div>
              </div>

              
              

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">
                <div class="p-3 p-lg-5 border">
                  

                 

                  

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.php'" name="commander">Effectuer la commande</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>

        </form> 
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
        <div class="row text-center">
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