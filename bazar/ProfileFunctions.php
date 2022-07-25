<?php
$con = mysqli_connect("localhost", "root", "", "artisanatshop");


//profile
function infoProfile(){
    global $con;
    $clientActuel=$_SESSION['client_email'];
    $req="SELECT * FROM client WHERE client_email='$clientActuel' ";
    $resultat=mysqli_query($con,$req);
    return $resultat;
  
  }

//modifier profile
function modifierProfile(){
    global $con;
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit'])){
      $mssg="salam";
          $prenom=safe_value($con,$_POST['prenom']);
          $nom=safe_value($con,$_POST['nom']);
          $num=safe_value($con,$_POST['num']);
          $ville=safe_value($con,$_POST['ville']);
          $email=safe_value($con,$_POST['email']);
  
          $utilisateurCourant=$_SESSION['client_email'];
          if(!empty($prenom) && !empty($nom) && !empty($num) && !empty($ville) && !empty($email)){
           $req="UPDATE client SET  client_prenom='$prenom' , client_nom='$nom' , client_num_tel='$num' , client_ville='$ville'  , client_email='$email' WHERE client_email='$utilisateurCourant' ";
           $resultat=mysqli_query($con,$req)  ; 
           
              if($resultat){
              ?>
                       <script>
                       alert('le profile a été bien modifié ');
                       
                     </script>
                     <?php
                  
                }else{
                  ?>
                       <script>
                       
                       alert('le profile n\'a pas été modifié ,  veuillez réessayer ');
                       </script>
                     <?php 
     
                }
          }
       }
       }
 ?>