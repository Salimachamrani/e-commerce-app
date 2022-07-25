<?php 
  
  include('ProfileFunctions.php');
  $profile=infoProfile();
  while($row1=mysqli_fetch_assoc($profile)){
    $client_prenom=$row1['client_prenom'];
    $client_nom=$row1['client_nom'];
    $client_image=$row1['client_nom'];
    $client_ville=$row1['client_ville'];
    $client_num=$row1['client_num_tel'];
    $client_email=$row1['client_email'];


   }
   modifierProfile();
  
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Panier</title>
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet"  href="css/all.min.css">
    <link rel="stylesheet"  href="css/shop.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style4.css">
    
    
  </head>
  <body>
  
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">
            

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            <div class="site-logo">
                <a href="#" class="js-logo-clone">ArtisanatShop</a>
              </div>
              
            </div>
            
            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-left">
            <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Chercher">
              </form>
            </div>

           
            
            

           

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                <li><a href="../deconnexion.php" data-toggle="tooltip" data-placement="bottom" title="Déconnexion"><span class="icon icon-sign-out"></span></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Profile" data-bs-toggle="modal" data-bs-target="#profile"><span class="icon icon-person">
                 
                  </span></a></li>
                <li><a href="contact.php" data-toggle="tooltip" data-placement="bottom" title="newsletter"><span class="icon icon-contact_mail"></span></a></li>

                  <li>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart'])){
                      $count=count($_SESSION['cart']);
                    }
                    ?>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count"><?php echo $count; ?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                  
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
    
        </div>
      </nav>
      

<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" class="text-dark">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><i class="fas fa-user-alt" style="margin-right:20px; color:#868995;"></i><?php echo $client_prenom." ".$client_nom; ?></p>
        <hr>
        <p><i class="fas fa-phone-alt" style="margin-right:20px; color:#868995;"></i> <?php echo $client_num; ?></p>
        <hr>
        <p><i class="fas fa-envelope" style="margin-right:20px; color:#868995;"></i> <?php echo $client_email; ?></p>
        <hr>
        <p><i class="fas fa-map-marker-alt" style="margin-right:20px; color:#868995;"></i><?php echo $client_ville; ?></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " style="background-color:#f4623a; color:white;" data-bs-toggle="modal" data-bs-target="#editProfile" data-bs-dismiss="modal">Changer profile</button>
      </div>
    </div>
  </div>
</div>
<!--edit profile Form  -->
<div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier votre profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
     
     
      <div class="modal-body">
        <form method="POST" >
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" value="<?php echo $client_prenom; ?>" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <input type="text" class="form-control" name="nom" value="<?php echo $client_nom; ?>" required>
           
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Numéro de téléphone</label>
            <input type="text" class="form-control"  name="num" value="<?php echo $client_num; ?>" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Ville</label>
            <input type="text" class="form-control"  name="ville" value="<?php echo $client_ville; ?>" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control"  name="email" value="<?php echo $client_email; ?>" required>
          </div>
         
       
      </div>
      <div class="modal-footer">
      <button  class="btn modifier  " type="submit"  name="edit" style="background-color:#f4623a; color:white;">Modifier</button >

      </div>
      </form>
    </div>
  </div>
</div>
  
    </header>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
       <!-- Bootstrap core JS-->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
 
    </body>
    </html>