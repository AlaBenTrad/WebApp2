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
<h2 class="text-center wowload fadeInUp">Tsakany ?!</h2> 
<h3 class="text-center  wowload fadeInUp">Sakany permet les étudiants de résoudre leur problémes de foyer.</h3>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
      <label>Region</label></br>
								<select name="region" size="0"  >
<option value="" selected >Choisissez</option>
<option value="Tunis">Tunis</option>
<option value="La Manouba">La Manouba</option>
<option value="Ben Arous">Ben Arous</option>
<option  value="Ariana">Ariana</option>
</select>
                           </br> 
                           
                           </br> 
       <input type="text" placeholder="Adresse" name="adresse" required="required"/>
                            <input type="text" placeholder="Nombre de chombre" name="nb_chambre" required="required"/>
                            <label>Cible</label></br>
								<select name="target" size="0"  >
<option value="" selected >Choisissez</option>
<option value="Femme">Femme</option>
<option value="Homme">Homme</option>
</select>
                           </br> 
                            <input type="text" placeholder="Prix" name="prix" required="required"/>

							<input type="text" placeholder="Nombre maximum" name="nb_max" required="required"/>
                            <input type="text" placeholder="Nom et prénom" name="nom_pre" required="required"/>
							<input type="text" placeholder="Telephone" name="tel" required="required"/>
                            
                           
                           </br> 
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
	$region =$_POST['region'];
	$adresse=$_POST['adresse'];
	$nb_chambre=$_POST['nb_chambre'];
	$target=$_POST['target'];
	$prix=$_POST['prix'];
	$nb_max=$_POST['nb_max'];
	$nom_pre=$_POST['nom_pre'];
	$tel=$_POST['tel'];
	
	
$req= "INSERT INTO `sakkany`(`region`, `adresse`,`nb_chambre`,`target`,`prix`,`nb_max`,`nom_pre`,`tel`) VALUES ('$region','$adresse', '$nb_chambre','$target','$prix','$nb_max','$nom_pre','$tel')";
$reponse = $bdd->query($req);
if($reponse)
echo "<script>alert(\"Votre colocation a été ajouter avec succés.\")</script>"; 
else
echo "<script>alert(\"Echec de colocation.\")</script>";	
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