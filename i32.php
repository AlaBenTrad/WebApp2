<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Mana3ni</title><head>
<meta charset="UTF-8" />

<link rel="stylesheet" href="styles/bootstrap.min.css" />
<link rel="stylesheet" href="styles/animate.css" />
<link rel="stylesheet" href="styles/set.css" />
<link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="topbar animated fadeInLeftBig"></div>
<div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><img src="images/home/Capture4.jpg" alt="logo"></a>
            </div>
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#works">Accueil</a></li>
                 <li ><a href="#about">A propos</a></li>
                 <li ><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div></br></br>


 
<form method="post" name="form">
<div id="contact" class="spacer">
<div class="container contactform center">
<h2 class="text-center wowload fadeInUp">Rivezli ?!</h2> 
<h3 class="text-center  wowload fadeInUp">Vous oubliez souvant, avec Dhakerny vous vous rappellez de tous.</h3>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
      <input type="text" placeholder="CIN" name="cin" required="required"/>      
      <label>Filiere</label></br>
								<select name="filiere" size="0"  >
<option value="" selected >Choisissez</option>
<option value="LFIG">LFIG</option>
<option value="LAID">LAID</option>
<option value="LAE">LAE</option>
<option  value="LFG">LFG</option>
<option  value="LAC">LAC</option>
<option  value="LAMAC">LAMAC</option>
</select>
                           </br> </br>
                           <label>Type</label></br>
								<select name="type" size="0"  >
<option value="" selected >Choisissez</option>
<option value="PDF">PDF</option>
<option value="voc">Eng. vocal</option>
</select>
                           </br> </br>
                            <textarea rows="3" placeholder="Lien" name="lien" required></textarea>    
       
  <button type="submit" class="btn btn-primary" name="1"><i class="fa fa-paper-plane"></i> Envoyez</button>
        <?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost; dbname=codelab; charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['1'])){
//Ajout dans la base
	$cin =$_POST['cin'];
	$filiere=$_POST['filiere'];
	$type=$_POST['type'];
	$lien=$_POST['lien'];
	
	
	
$req= "INSERT INTO `rivezli`(`cin`, `filiere`,`type`,`lien`) VALUES ('$cin','$filiere', '$type','$lien')";
$reponse = $bdd->query($req);
if($reponse)
echo "<script>alert(\"Votre cour a été ajouter avec succés.\")</script>"; 
else
echo "<script>alert(\"Echec.\")</script>";	
	}

 
?>
 
        
      </div>
  </div>
</div>
</div>
</form>
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2016 E-souk.tn. Tous les droits sont réservés.
</div>
</body>
</html>