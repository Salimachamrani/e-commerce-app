<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "artisanatshop");

 if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['commander'])){
        $req1="INSERT INTO `commande`(`nom`, `prenom`, `num_tel`, `adresse`, `modePayement` ,`vendeur_ID`) VALUES ('$_POST[c_lname]', '$_POST[c_fname]', '$_POST[c_phone]' , '$_POST[c_address]','$_POST[pay_mode]','1')";
        $resultat=mysqli_query($con,$req1) or die(mysqli_error($con)) ;
        if($resultat){
            $Order_ID=mysqli_insert_id($con);
            $req2="INSERT INTO `commandes`( `commande_ID`,`produit_titre`, `prix`, `quantite`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$req2);
            if($stmt){
                mysqli_stmt_bind_param($stmt,"isii",$Commande_ID,$produit_titre,$prix,$quantité);
                foreach($_SESSION['cart'] as $key=>$values){
                    
                    $produit_titre=$values['nom'];
                    $prix=$values['prix'];
                    $quantité=$values['quantite'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                header('location:thankyou.php');
            }else{
                echo'<script>alert("Il ya une erreur! veuillez recommencer")</script>';
            
            }
        
        }else{

            echo'<script>alert("Il ya une erreur! veuillez recommencer")</script>';
            
            
        }

    }
 }
 ?>