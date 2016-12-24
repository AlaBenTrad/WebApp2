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
<div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeIn">
        <img src="images/2.JPG" alt="img01"/>
        <figcaption>
            <h2>Besoin d'un foyer?</h2>
            <p>Si vous n'avez pas de foyer, la colocation vous permet de vous trouver moins cher avec des gens sympas !<br>
            <a href="i21.php" title="1" data-gallery>Voir plus</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
     
<img src="images/Capture.JPG" alt=""/>        <figcaption>
                     
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
     
<img src="images/4174_l.jpg" alt="img01"/>        <figcaption>
            <h2>VOUS AVEZ UN FOYER?</h2>
<p>Économique, le colocation vous permet de proposer des places et de partager les frais, avec eux.<br>
            <a href="i22.php" title="1" data-gallery>Voir plus</a></p>            
        </figcaption>
    </figure>
    
    </div>
    </br>
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Sakany permet les étudiants de résoudre leur problémes de foyer.</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-paint-brush"></i>Mana3ni.tn</h4>
    <p>Ce site est dédié à tous les étudiants tunisiennes pour trouver des solutions à les grands problèmes quotidiens. A l'aide de ce site , l'étudiant peux trouvez des covoiturages , des collections et un espace de rappel des dates des rattrapages , les devoirs surveilles et des supports de cours</p>
  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-code"></i> Pourquoi Mana3ni.tn</h4>
  <p>Mana3ni est le premier site dédié à la résolutions des problèmes quotidiens des étudiants tunisiennes. Grâce aux avantages de ce site, plusieurs étudiants ont bénéficier de leurs de temps à la réalisation d'autre choses. </p>    
  </div>
  </div>
</div>
<form method="POST" action="index.php" name="form">
<div id="contact" class="spacer">
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Entrer en contact avec la communauté Mana3ni</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <input type="text" placeholder="Nom" name="nom" required="required">
        <input type="email" placeholder="Adresse e-mail" name="ad" required="required">
        <textarea rows="5" placeholder="Message" name="msg" required></textarea>
        <?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost; dbname=souk; charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
//Ajout dans la base
	if(!empty($_POST['nom'])&&!empty($_POST['ad'])&&!empty($_POST['msg']))
	{ 
	$nom=$_POST['nom'];
	$ad =$_POST['ad'];
	$msg=$_POST['msg'];
$req= "INSERT INTO `contact`(`Nom`, `Adresse`,`Message`) VALUES ('$nom','$ad', '$msg')";
$reponse = $bdd->query($req);
if($reponse)
echo "<script>alert(\"Votre message a été envoyer\")</script>"; 
else
echo "<script>alert(\"Echec d'envoi de message\")</script>";
 }
?>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Envoyez</button>
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