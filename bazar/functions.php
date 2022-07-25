<?php 
    $con = mysqli_connect("localhost", "root", "", "artisanatshop");

 //safe value
 function safe_value($con,$value){
    return mysqli_real_escape_string($con,$value);
  }
   //afficher produits
   function afficherProduits(){
    $con = mysqli_connect("localhost", "root", "", "artisanatshop");
    if(isset($_GET['id'])){
        $id=safe_value($con,$_GET['id']);
        $req="SELECT * FROM produit WHERE status=1 AND bazar_ID='$id' ORDER BY produit_ID DESC";

    }
    return $resultat=mysqli_query($con,$req);

   }
   //afficher le carousel des prduits
   function carouselProduits(){
    $con = mysqli_connect("localhost", "root", "", "artisanatshop");
    if(isset($_GET['id'])){
        $id=safe_value($con,$_GET['id']);
        $req="SELECT * FROM produit WHERE status=1 AND bazar_ID=(SELECT produit.bazar_ID FROM produit WHERE produit_ID='$id' ) ";
        

    }
    return  $resultat=mysqli_query($con,$req) ;


   }
   function copierProduit(){
    $con = mysqli_connect("localhost", "root", "", "artisanatshop");
    if(isset($_GET['id'])){
      $id=safe_value($con,$_GET['id']);
      $req="SELECT * FROM produit WHERE produit_ID='$id' ";
      return $resultat=mysqli_query($con,$req);
      }
    }
    function informationsArtisan(){
        $con = mysqli_connect("localhost", "root", "", "artisanatshop");
        
        $bazarActuel=$_SESSION['bazar_ID'];
        $req="SELECT * FROM vendeur WHERE vendeur_ID=(SELECT vendeur_ID FROM bazar WHERE bazar_ID='$bazarActuel' ) ";

        
        return $resultat=mysqli_query($con,$req);
    }
    // Ajouter au panier
   /* function ajouterAuPanier(){
        global $con;
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['ajouter'])){
            if(isset($_SESSION['cart'])){

            }else{
                $_SESSION['cart'][0]=array('nom'=>$_POST['nom'],'prix'=>$_POST['prix'],'quantité'=>1);
                print_r($_SESSION['cart']);
                
            }
        /*if(isset($_GET['id'])){
            $id=safe_value($con,$_GET['id']);
            $date=date("Y-m-d H:i:s");  
            $produit_quantite=$_GET['quantite'];   
            
        $req="INSERT INTO panier ( produit_id, produit_titre, produit_quantite, montantTotal,client_ID, date)  SELECT '$id', produit_titre, '$produit_quantite' , '$produit_quantite*produit_prix',  '$date'  FROM produit WHERE  produit_ID='$id')";
        $resultat=mysqli_query($con,$req);
        }
    }
   }*/
    //Afficher panier
   /* function afficherPanier(){
        global $con;
        $clientActuel=$_SESSION['client_email'];
        $req="SELECT panier.produit_titre, panier.quantite, panier.montantTotal,produit.produit_prix, produit.produit_image FROM panier INNER JOIN produit ON panier.produit_ID=produit.produit_ID WHERE client_ID='$clientActuel' ";
        return $resultat=mysqli_query($con,$req);
    }*/
    
//info bazar
function infoBazar(){
    global $con;
    if(isset($_GET['id'])){
        $_SESSION['bazar_ID']=$_GET['id'];
        $id=safe_value($con,$_GET['id']);
    $req="SELECT * FROM bazar WHERE bazar_ID='$id' ";
    }
    $resultat=mysqli_query($con,$req);
    return $resultat;
}


  



?>