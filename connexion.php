
<?php 
    session_start();
	include('config.php');
    $valid= (boolean) true;
	if(isset($_POST['connexion'])){
		$your_email = $_SESSION['your_email'] ?? '';
		$your_email=$_POST['your_email'];
		$password=$_POST['password'];
		$sql="SELECT * FROM clients WHERE your_email='$your_email' AND password='$password' ";
		$resultat=$bdd->prepare($sql);
		$resultat->execute();

		if($resultat->rowCount() ==0){
            $valid=false;
			$mssg="le mail ou le mot de passe est incorrecte !";

		}
		if($valid){
			header('Location:shops.php');
	    	exit;
			
		}
		
	}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	
	<title>Form-v5 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet"  href="css/all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/s'identifier.css"/>
</head>
<body class="form-v5">
    <div class="flèche">
    <a href="sidentifier.php" class="arrow" ><i class="fas fa-chevron-left fa-2x"></i> </a>
    </div>
    <div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail"   method="post">
				<h2>Se connecter</h2>
				<div class="form-row">
					 
					<input type="text" name="your_email" id="your-email" class="input-text" placeholder="Entrer Votre adresse email" required>
					<i class="fas fa-user"></i>
				</div>
                <div class="form-row">
					
					<input type="password" name="password" id="password" class="input-text" placeholder="Entrer Votre mot de passe" required>
					<i class="fas fa-lock"></i>
				</div>
				<?php 
                      if(isset($mssg)){
                    ?>
                            <div id="mssg" style="color:red;  text-align: center; font-size:80;"> <?= $mssg ?> </div>
                  <?php 
                      }
                    ?>
                <div class="form-row-last" >
					<input type="submit" name="connexion" class="register" id="connexion" value="Connexion">
				</div>

			  <!-- Bootstrap core JS-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
</body>
</html>