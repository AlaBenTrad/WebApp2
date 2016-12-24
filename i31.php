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
                                <li><a href="shop1.php">Boutique</a></li>
                                 <li><a href="blog.php">Blog</a></li>
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
			<h2 class="text-center wowload fadeInUp">Rivezli ?!</h2> 
<h3 class="text-center  wowload fadeInUp">Vous oubliez souvant, avec Dhakerny vous vous rappellez de tous.</h3>
		</div>
	</section>
	
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
                <form method="post" name="f2" >
				  <h4>Filiére</h4>
				 <form method="post" name="f2" >
								<select name="filiere" size="0"  >
<option value="" selected >Choisissez</option>
<option value="LFIG">LFIG</option>
<option value="LAID">LAID</option>
<option value="LAE">LAE</option>
<option  value="LFG">LFG</option>
<option  value="LAC">LAC</option>
<option  value="LAMAC">LAMAC</option>
</select>
                           </br>   <h4>Type</h4>
				 
								 
								<select name="type" size="0"  >
<option value="" selected >Choisissez</option>
<option value="PDF">PDF</option>
<option value="voc">Eng. vocal</option>
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
	$dep =$_POST['filiere'];
	$ar =$_POST['type'];
$reponse = $bdd->query("SELECT * FROM rivezli where filiere='$dep' or type='$ar' ");
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
							<td class="CIN">CIN</td>
							<td class="Marque">Filiére</td>
							<td class="Marque">Type</td>
                            <td class="Marque">lien</td>
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
	  echo $donnees['cin']; ?></h4>
								
							</td>
							<td class="cart_price">
								<p><?php
	  echo $donnees['filiere']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php
	  echo $donnees['type']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php
	  echo $donnees['lien']; ?></p>
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