<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mana3ni</title>
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
								
								<li><a href="panier.php"><i class="fa fa-shopping-cart"></i> Panier</a></li>
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
			<h2 class="text-center wowload fadeInUp">Tsakany ?!</h2> 
<h3 class="text-center  wowload fadeInUp">Sakany permet les étudiants de résoudre leur problémes de foyer.</h3>
		</div>
	</section>
	
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
                <form method="post" name="f2" >
				  <h4>Region</h4>
				 <form method="post" name="f2" >
								<select name="region" size="0"  >
<option value="" selected >Choisissez</option>
<option value="Tunis">Tunis</option>
<option value="La Manouba">La Manouba</option>
<option value="Ben Arous">Ben Arous</option>
<option  value="Ariana">Ariana</option>
</select>
                           </br>   <h4>Cible</h4>
				 
								<select name="cible" size="0"  >
<option value="" selected >Choisissez</option>
<option value="Femme">Femme</option>
<option value="Homme">Homme</option>
</select>
                           </br> 
               <button type="submit" class="btn btn-primary" name="ok"><i class="fa fa-paper-plane"></i> Envoyez</button>

				</ol>
			</div>
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
if(isset($_POST['ok'])){
	$dep =$_POST['region'];
	$ar =$_POST['cible'];
$reponse = $bdd->query("SELECT * FROM sakkany where region='$dep' or target='$ar' ");
?>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
                    <?php
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{ 
?>
						<tr class="cart_menu">
							<td class="image">Covoiture</td>
							<td class="Prix">Region</td>
							<td class="Marque">Cible</td>
							<td class="Marque">Prix</td>
                            <td class="Marque">Adresse</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                           
                           
						<tr>
                        <td class="cart_product">
								<a href=""><img src="images/cart/icone-aide-achat.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><?php
	  echo $donnees['region']; ?></h4>
								
							</td>
							<td class="cart_price">
								<p><?php
	  echo $donnees['target']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php
	  echo $donnees['prix']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php
	  echo $donnees['adresse']; ?></p>
							</td>
						</tr>
 <?php }} ?>
						</form>
					</tbody>
				</table>
			</div>
		</div>
        <section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Que voulez-vous faire ensuite?</h3>
				
			</div>
			
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
                	<div class="col-sm-2">
						<div class="single-widget">
							<ul class="nav nav-pills nav-stacked">
                            <h2>Boutique</h2>
                               <li><a href="shop1.php">Multimédia</a></li>
								<li><a href="shop2.php">Accesoires</a></li>
								<li><a href="shop3.php">Meubles</a></li>
								<li><a href="shop4.php">Véhicule</a></li>
								<li><a href="shop5.php">Habillement</a></li>
                                <li><a href="shop6.php">Autre</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
                        <h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
                            <li><a href="index.php">Acceuil</a></li>	
								<li><a href="contact.php">Contact </a></li>	
                                <li><a href="blog.php">Blog </a></li>
                                <li><a href="connect.php">Se connecter </a></li>												
							</ul>						
                      </div>
					</div>
				      <div class="col-sm-2">
						<div class="single-widget">
                        <h2>sites utiles</h2>
							<ul class="nav nav-pills nav-stacked">
                            <li><a href="https://www.tayara.tn" target="_blank">www.Tayara.tn</a></li>	
								<li><a href="http://www.ebay.com/" target="_blank">www.ebay.com </a></li>	
                                <li><a href="https://www.amazon.com" target="_blank">www.Amazone.com </a></li>
                              	<li><a href="http://www.ldlc.com/" target="_blank">www.ldlc.com </a></li>					
                                                   
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