<?php 
   //supprimer un élement du panier
 
    $con = mysqli_connect("localhost", "root", "", "artisanatshop");

    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $req="DELETE FROM panier WHERE produit_ID='$id' ";
      $resultat=mysqli_query($con,$req);
      if($resultat){
        header('Location:cart.php?m=1');
      }
    }
   

    

 ?>
 