<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Se connecter | Mana3ni</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<script src="javaScript/Panier.js" type="text/javascript"></script>
   </head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +216 55 473 444</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> Mana3ni@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/E-souk-1450636968297513/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/E__souk" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/home?trk=nav_responsive_tab_home" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://plus.google.com/u/2/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/Capture4.jpg" alt="logo"></a>
						</div>
						<div class="btn-group pull-right"><!--MEP-->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								
								<li><a href="connect.php"><i class="fa fa-lock"></i> Se connecter</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Acceuil</a></li>
                               
                                
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
					
				</div>
		  </div>
	  </div>
	</header>
	
<section id="advertisement">
		<div class="container">
			<img src="images/shop/ad.jpg" alt="" />
		</div>
	</section>
	
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Nouvel étudiant. Inscrivez-vous!</h2>
						<form method="post" name="f2" >
							<input type="text" placeholder="Nom" name="nom" required="required"/>
                            <input type="text" placeholder="Prénom" name="prenom" required="required"/>
                            <input type="text" placeholder="CIN" name="cin" required="required"/>

							<input type="email" placeholder="Adresse e-mail" name="email" required="required"/>
							<input type="password" placeholder="Mot de passe" name="mdp" required="required"/>
                            
                            <label>Ville</label>
								<select name="ville" size="0"  >
<option value="" selected >Choisissez</option>
<option value="Tunis">Tunis</option>
<option value="La Manouba">La Manouba</option>
<option value="Ben Arous">Ben Arous</option>
<option  value="Ariana">Ariana</option>
</select>
                            
<label>Faculté</label>
								<select name="fac" size="0"  >
<option value="" selected >Choisissez</option>
<option value="FSHST">FSHST</option>
<option value="ENS">ENS</option>
<option value="ENSIT">ENSIT</option>
<option  value="ISELSHT">ISELSHT</option>
<option  value="ISGT">ISGT</option>
<option  value="ISBAT">ISBAT</option>
<option  value="ISM">ISM</option>
<option  value="ISAD">ISAD</option>
<option  value="ISMPT">ISMPT</option>
<option  value="ISEAHT">ISEAHT</option>
<option  value="ISAJC">ISAJC</option>
<option  value="ISEAHZ">ISEAHZ</option>
<option  value="TBS">TBS</option>
<option  value="INP">INP</option>
</select>
<label>Filiére</label>
								<select name="filiere" size="0"  >
<option value="" selected >Choisissez</option>
<option value="LFIG">LFIG</option>
<option value="LAID">LAID</option>
<option value="LFG">LFG</option>
<option  value="LAE">LAE</option>
<option  value="LAMAC">LAMAC</option>
<option  value="LAC">LAC</option>
</select>
<label>Niveau</label>
								<select name="niveau" size="0"  >
<option value="" selected >Choisissez</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>

</select>
<button type="submit" class="btn btn-default" name="1">S'inscrir</button>
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
	$email =$_POST['email'];
	$mdp=$_POST['mdp'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$niveau=$_POST['niveau'];
	$filiere=$_POST['filiere'];
	$cin=$_POST['cin'];
	$fac=$_POST['fac'];
	$ville=$_POST['ville'];
$req= "INSERT INTO `etudiant`(`cin`, `nom`,`prenom`, `fac`,`filiere`,`ville`,`niveau`,`email`,`mdp`) VALUES ('$cin','$nom', '$prenom','$fac','$filiere','$ville','$niveau','$email','$mdp')";
$reponse = $bdd->query($req);
if($reponse)
echo "<script>alert(\"Votre compte Mana3ni a été crée avec succès.\")</script>"; 
else
echo "<script>alert(\"Echec de création du compte Mana3ni\")</script>";	
	}

 
?>
 
							
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Nouvel enseignant. Inscrivez-vous!</h2>
						<form method="post" name="f2" >
							<input type="text" placeholder="Nom" name="nom" required="required"/>
                            <input type="text" placeholder="Prénom" name="prenom" required="required"/>
                            <input type="text" placeholder="CIN" name="cin" required="required"/>

							<input type="email" placeholder="Adresse e-mail" name="email" required="required"/>
							<input type="password" placeholder="Mot de passe" name="mdp" required="required"/>
                             <label>Ville</label>
								<select name="ville" size="0"  >
<option value="" selected >Choisissez</option>
<option value="Tunis">Tunis</option>
<option value="La Manouba">La Manouba</option>
<option value="Ben Arous">Ben Arous</option>
<option  value="Ariana">Ariana</option>
</select>
                            
<label>Faculté</label>
								<select name="fac" size="0"  >
<option value="" selected >Choisissez</option>
<option value="FSHST">FSHST</option>
<option value="ENS">ENS</option>
<option value="ENSIT">ENSIT</option>
<option  value="ISELSHT">ISELSHT</option>
<option  value="ISGT">ISGT</option>
<option  value="ISBAT">ISBAT</option>
<option  value="ISM">ISM</option>
<option  value="ISAD">ISAD</option>
<option  value="ISMPT">ISMPT</option>
<option  value="ISEAHT">ISEAHT</option>
<option  value="ISAJC">ISAJC</option>
<option  value="ISEAHZ">ISEAHZ</option>
<option  value="TBS">TBS</option>
<option  value="INP">INP</option>
</select>
<label>Filiére</label>
								<select name="filiere" size="0"  >
<option value="" selected >Choisissez</option>
<option value="LFIG">LFIG</option>
<option value="LAID">LAID</option>
<option value="LFG">LFG</option>
<option  value="LAE">LAE</option>
<option  value="LAMAC">LAMAC</option>
<option  value="LAC">LAC</option>
</select>
<label>Niveau</label>
								<select name="niveau" size="0"  >
<option value="" selected >Choisissez</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>

</select>
</br></br>

							<button type="submit" class="btn btn-default" name="2">S'inscrir</button>
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
if(isset($_POST['2'])){
//Ajout dans la base
	$email =$_POST['email'];
	$mdp=$_POST['mdp'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$niveau=$_POST['niveau'];
	$filiere=$_POST['filiere'];
	$cin=$_POST['cin'];
	$fac=$_POST['fac'];
	$ville=$_POST['ville'];
$req= "INSERT INTO `enseignat`(`cin`, `nom`,`prenom`, `fac`,`filiere`,`ville`,`niveau`,`email`,`mdp`) VALUES ('$cin','$nom', '$prenom','$fac','$filiere','$ville','$niveau','$email','$mdp')";
$reponse = $bdd->query($req);
if($reponse)
echo "<script>alert(\"Votre compte Mana3ni a été crée avec succès.\")</script>"; 
else
echo "<script>alert(\"Echec de création du compte Mana3ni\")</script>";	
	}

 
?>
 


						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
                	
					<div class="col-sm-2">
						<div class="single-widget">
                        <h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
                            <li><a href="index.php">Acceuil</a></li>	
								<li><a href="contact.php">Contact </a></li>	
                                <li><a href="connect.php">Se connecter </a></li>												
							</ul>						
                      </div>
					</div>
				      <div class="col-sm-2">
						<div class="single-widget">
                        <h2>sites utiles</h2>
							<ul class="nav nav-pills nav-stacked">
                            <li><a href="http://karpool.tn/" target="_blank">www.karpool.tn/</a></li>	
								<li><a href="http://www.tunisie-annonce.com/" target="_blank">www.tunisie-annonce.com </a></li>	
                                			
                                                   
							</ul>						
                        </div>
					</div>
				
					<div class="col-sm-2">
                    	<div class="single-widget">
                        <h2>Visitez-nous</h2>
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/E-souk-1450636968297513/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/E__souk" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/home?trk=nav_responsive_tab_home" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://plus.google.com/u/2/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

					</div>
					<div class="col-sm-3 col-sm-offset-1">
					</div>
					
				</div>
			</div>
</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-Souk. Tous les droits sont réservés.</p>
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
</body>
</html>