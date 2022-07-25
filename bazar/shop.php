<?php
session_start();
    require('functions.php');
    $value=afficherProduits();
    $informationsArtisan=informationsArtisan();
    while($row=mysqli_fetch_assoc($informationsArtisan)){
      $artisan_prenom=$row['vendeur_prenom'];
      $artisan_nom=$row['vendeur_nom'];
      $artisan_image=$row['vendeur_nom'];
      $artisan_ville=$row['vendeur_ville'];
      $artisan_num=$row['vendeur_num_tel'];
      $artisan_email=$row['vendeur_email'];

 
     }
     $bazar=infoBazar();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> ArtisanatShop-Bazar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Font-->
	  <link rel="stylesheet"  href="fonts/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
   

    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/all.min.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style2.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php include('navbar.php') ;?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </div>
    <?php
        if(mysqli_num_rows(infoBazar()) > 0){
            while($row1=mysqli_fetch_assoc($bazar)){  ?>
    <div class="site-blocks-cover" style="background-image: url(../assets/img/plats.jpg); height:10px;" >
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2"><?php echo $row1['bazar_nom']?></h1>
            <div class="intro-text text-center text-md-left">
              <p>
              <h3 class="mb-2" style="color:white;"><i class="fas fa-map-marker-alt" style="color:#f4623a;"></i> <?php echo $row1['bazar_ville']?></h1>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  } } ?>

    <div class="site-section" >
      <div class="container" align="center">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Voir Produits</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    
                    
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5" style="margin-left:150px;">
           
            <?php
             if(mysqli_num_rows($value)){
              while($row=mysqli_fetch_assoc($value))
              {
          ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border" >
                  <figure class="block-4-image" >
                    <a href="#"><img  src="../dashboard/dist/assets/img/produits/<?php echo $row['produit_image'] ?>" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?id=<?php echo $row['produit_ID']?>" ><?php echo $row['produit_titre'] ?></a></h3>
                    <p class="mb-0 font-weight-bold" style="margin-top:5px; color:black;"><?php echo $row['produit_prix'] ?> MAD</p>
                  </div>
                </div>
              </div>
              <?php } 

             }else{
               echo "Ce bazar ne contient aucun produit !";
             } ?>
                
              
              

              
            
             
           
         

           
           

             


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                 
                </div>
             
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