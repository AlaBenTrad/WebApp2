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
							<a href="index.php"><img src="images/home/e-souk.PNG" alt="" /></a>
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
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						
							<div class="panel panel-default">
								<div class="panel-heading">
									
								</div>
							</div>
						</div><!--/category-productsr-->
						
						
						
					</div>
				</div>
				
				<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Entrer en contact</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="nom" class="form-control" required="required" placeholder="Nom">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="ad" class="form-control" required="required" placeholder="Adresse e-mail">
				            </div>
				           
				            <div class="form-group col-md-12">
				                <textarea name="msg" required class="form-control" rows="6" placeholder="Vote message"></textarea>
				            </div>     
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
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Envoyez">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Souk Inc.</p>
							<p>7 rue 1475, Bardo, Tunis</p>
							<p>Bardo Tunis</p>
							<p>Mobile: +216 55 473 444</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: Esouk2016@gmail.com</p>
	    				</address>
	    				
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
                	<div class="col-sm-2">
						<div class="single-widget">
							<ul class="nav nav-pills nav-stacked">
                            
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
                        <h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
                            <li><a href="index.php">Acceuil</a></li>	
								<li><a href="">Contact </a></li>	
                                <li><a href="">Blog </a></li>
                                <li><a href="">Se connecter </a></li>							
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
		<script src="javaScript/Panier.js" type="text/javascript"></script>
	</footer><!--/Footer-->
</body>
</html>