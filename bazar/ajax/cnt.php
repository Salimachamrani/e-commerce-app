<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "artisanatshop");

//safe value
function safe_value($con,$value){
    return mysqli_real_escape_string($con,$value);
  }

if($_SERVER['REQUEST_METHOD']=='POST'){
   $prenom=safe_value($con,$_POST['Prenom']);
   $nom=safe_value($con,$_POST['Nom']);
   $email=safe_value($con,$_POST['Email']);
   $subject=safe_value($con,$_POST['Subject']);
   $message=safe_value($con,$_POST['Message']);

   $bazarActuel=$_SESSION['bazar_ID'];

   $date=date("Y-m-d H:i:s");     

   $req="INSERT INTO message (prenom, nom, email, subject, messageContenu , vendeur_ID, date) SELECT '$prenom', '$nom', '$email' , '$subject' , '$message' ,vendeur_ID, '$date' FROM bazar WHERE bazar_ID='$bazarActuel'  ";
   $resultat=mysqli_query($con,$req) or die(mysqli_error($con));
                  if($resultat){
                    ?>
                    <script>
           
                    Swal.fire({
                    icon: 'success',
                    title: 'Votre message a été bien envoyé',
                    showConfirmButton: false,
                    timer: 1500
                    })
                  </script>
                   <?php
                  }


                }
?>