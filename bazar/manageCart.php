<?php 
session_start();

 if($_SERVER['REQUEST_METHOD']=='POST'){
     if(isset($_POST['ajouter'])){
        if(isset($_SESSION['cart'])){

            $articles=array_column($_SESSION['cart'],'nom');
            if(in_array($_POST['nom'],$articles)){
                echo'<script>alert("le produit a été ajouté auparavant");
                window.location.href="cart.php";
                </script>';
            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('image'=>$_POST['image'],'nom'=>$_POST['nom'],'prix'=>$_POST['prix'],'quantite'=>1);
            }
           
    
    
        }else{
            $_SESSION['cart'][0]=array('image'=>$_POST['image'],'nom'=>$_POST['nom'],'prix'=>$_POST['prix'],'quantite'=>1);
            echo'<script>alert("le produit a été ajouté au panier");
            window.location.href="cart.php";
            </script>';
            
        }
     }
     if(isset($_POST['supprimer'])){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value['nom']==$_POST['nom']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo'<script>alert("le produit a été supprimé du panier");
            window.location.href="cart.php";
            </script>';
            
            }
        }
     }
     if(isset($_POST['Mode_Quantite'])){
        foreach($_SESSION['cart'] as $key=>$value){
           if($value['nom']==$_POST['nom']){
                $_SESSION['cart'][$key]['quantite']=$_POST['Mode_Quantite'];
                print_r($_SESSION['cart']);
              
               /* echo'<script>alert("le produit a été supprimé du panier");
            window.location.href="cart.php";
            </script>';*/
            
           }
       }
     }
    
}

?>