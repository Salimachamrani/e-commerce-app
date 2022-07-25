<?php

  require("fonctions_control_panel.php");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">le nom du bazar</label>
    <input type="name" class="form-control" name="bazar_nom" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">l'image du bazar</label>
    <input type="text" class="form-control" name="bazar_image"  required>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">la ville</label>
    <input type="text" class="form-control" name="bazar_ville" required>
   </div>

  <button type="submit" name="valider" class="btn btn-primary">créer un bazar</button>
</form>

      </div></div></div>

    
</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['bazar_nom']) AND isset($_POST['bazar_image']) AND isset($_POST['bazar_ville']))
    {
    if(!empty($_POST['bazar_nom']) AND !empty($_POST['bazar_image']) AND !empty($_POST['bazar_ville']))
	    {
	    	$bazar_nom = htmlspecialchars(strip_tags($_POST['bazar_nom']));
	    	$bazar_image = htmlspecialchars(strip_tags($_POST['bazar_image']));
	    	$bazar_ville = htmlspecialchars(strip_tags($_POST['bazar_ville']));
          
          try 
          {
            créer($bazar_nom, $bazar_image, $bazar_ville);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>