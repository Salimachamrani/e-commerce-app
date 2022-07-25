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
    <title>Contact</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
  <script type="text/javascript">
   /*  $(document).ready(function(){
    $('#c_email').keyup(function(){
      if(!validerEmail()){
				
				$("#c_email").css("border","2px solid red");
				$("#emailMsg").html("forme invalide");
			}
			buttonState();
    });
});
function validerEmail(){
  var email=$("#email").val();
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/ ;
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }

}*/

  </script>
  <body>
  
  <div class="site-wrap">
  <?php include('navbar.php') ;?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="shop.php">Bazar</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <form  method="post" id="register-form">
            <div id="success" style="color:red;"> </div>

              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Prénom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname" >
                    <div id="error_prenom" style="color:red;"> </div>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Nom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                    <div id="error_nom" style="color:red;"> </div>

                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                    <div id="error_email" style="color:red;"> </div>
                    <div id="emailMsg" style="color:red;" > </div>

                   

                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Sujet </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                    <div id="error_subject" style="color:red;"> </div>

                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                    <div id="error_message" style="color:red;"> </div>

                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="button" class="btn btn-primary btn-lg btn-block envoyer" name="envoyer" value="Envoyer le Message">
                  </div>
                </div>
              </div>
            </form>
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
  
  <script src="js/jQuery.js"></script>
  <script type="text/javascript">
        $(function() {
            $('#register-form').validate({
                errorClass: "help-block",
                rules: {
                    

                    c_email: {
                        required: true,
                        email: true
                    }
                   
                  
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
    
  </body>
</html>