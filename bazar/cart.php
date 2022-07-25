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


?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Panier</title>
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
          <div class="col-md-12 mb-0"><a href="shop.php">Bazar</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Panier</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Produit</th>
                    <th class="product-price">Prix</th>
                    <th class="product-quantity">Quantité</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                //print_r($_SESSION['cart']) ;
               
                if(isset($_SESSION['cart'])){
                  foreach($_SESSION['cart'] as $key=>$value){
                   
                    echo "<tr>
                  
                    <td class='product-thumbnail'>
                      <img src='../dashboard/dist/assets/img/produits/$value[image]' alt='Image' class='img-fluid'>
                    </td>
                    <td class='product-name'>
                      <h2 class='h5 text-black'>$value[nom]</h2>
                    </td>
                    <td> $value[prix] MAD  <input type='hidden' class='iprix'  value='$value[prix]' ></td>
                    <td> 
                    <form action='manageCart.php' method='post'>
                    <input type='number' min=0 class='form-control text-center iquantite'name='Mode_Quantite' onchange='this.form.submit();'  value='$value[quantite]' placeholder='' aria-label='Example text with button addon' aria-describedby='button-addon1'>
                    <input type='hidden' name='nom' value='$value[nom]' >

                    </form>
                    </td>
                        
                    <td class='itotal'></td>
                    <td>
                    <form action='manageCart.php' method='post'>
                    <button name='supprimer' class='btn btn-primary btn-sm'>X</button>
                    <input type='hidden' name='nom' value='$value[nom]' >
                    </form></td>
                  </tr>
                    ";
                  }
                }else{
                  $vide="aucun article n'a été encore ajouté au panier";
                }
                        
                     ?>
                  

                </tbody>
              </table>
             
              <div style="text-align:center; font-size:25px;"><?php if(isset($vide)){
                echo $vide;
              }  ?> </div>

            </div>

          </form>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Modifier le panier</button>
              </div>
              <div class="col-md-6">
                <a href="shop.php" class="btn btn-outline-primary btn-sm btn-block">Continuer vos achats</a>
              </div>
            </div>
            <div class="row">
              
              
              
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Le total à payer</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black" id='gtotal'> </strong>
                  </div>
                </div>
                <div class="row mb-5">
                  
                 
                </div>

                <div class="row">
                <?php  if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){

               ?>
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Passer à la caisse</button>
                  </div>
                  <?php  } ?>
                </div>
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
                <li class="phone"><a href="tel://23923929210"><?php echo $artisan_num ?></a></li>
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
  <script src="js/jQuery.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  var gt=0;
  var iprix=document.getElementsByClassName('iprix');
  var iquantite=document.getElementsByClassName('iquantite');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');


  function subtotal(){
    gt=0;
    for(i=0;i<iprix.length;i++){
     
      itotal[i].innerText=(iprix[i].value)*(iquantite[i].value)+" MAD";
      gt+=(iprix[i].value)*(iquantite[i].value);

    }
    gtotal.innerText=gt+" MAD";
  }
  subtotal();

  </script>

  </body>
</html>