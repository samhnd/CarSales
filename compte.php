<html>
	
	
	<head>
	
		
		<meta charset = "utf-8"/>
	
		
		<title>CAR&VIP : S'inscrire</title>
	
		
		<link rel="stylesheet" type="text/css" href="page.css" /> 
	
	
	</head>


	

	<body>


		
		
		<div id="bloc_page">
            
		<header>
                
			<div id="titre_principal">
                    
			<div id="logo">
                        
			<img src="images/logo.jpg" alt="Logo" />
                        
			<h1>CAR&VIP</h1>    
                    
			</div>
                    
			<h3>Vente de voiture de luxe</h3>
                
			</div>
                
                
			<nav>
                    
			<ul>
			
			<li>
			
			<FONT size="1.5pt">
			
			<a href="projet.html">Home</a>

                        
			<a href="Nosmodèles.html">Nos modèles</a>

			
			<a href="Seconnecter.html">Se connecter</a>

                        
			<a href="Sinscrire.html">S'inscrire</a>

			
			<a href="Nouscontacter.html">Nous contacter</a>

			
			</FONT>
			
			</li>
                    
			</ul>
                
			</nav>
            
		</header>

		
		<div id="banniere_image">
                
		<div id="banniere_description">
                    	
		Voir nos modèles les plus connus
                    
		<a href="Nosmodèles.html" class="bouton_rouge">Voir les modèles <img src="images/flecheblanchedroite.png" alt="" /></a>
                
		</div>
            
		</div>
		
		
		<section>
		<div id="connect">

	<h1> S'inscrire </h1></legend>
	<em> Vous recevrez la confirmation de votre inscription par mail. </em></br>

	<form class="formulaire" method="post" action="creer.php">
	<fieldset>
    <p>

            <strong><label for="nom">Nom :</label></strong></br>
        <input type="text" name="nom" id="nom"  size="40" required />
        </br></br>


        <strong><label for="prenom">Prenom :</label></strong></br>
        <input type="text" name="prenom" id="prenom"  size="40" required />
        </br></br>

	
        <strong><label for="mail">Adresse mail :</label></strong></br>
        <input type="email" name="mail" id="mail"  size="40" required />
        </br></br>


         <strong><label for="codepostal">Code Postal :</label></strong></br>
         <input id="codepostal" name="codepostal" type="cp" placeholder="Par exemple : 93800" >
         </br></br>

         
         <strong><label for="telephone">Téléphone :</label></strong></br>
		<input id="telephone" name="telephone" type="tel" placeholder="+33" required>
         </br></br>

        <strong><label for="pseudo">Pseudo :</label></strong></br>
        <input type="text" name="pseudo" id="pseudo"  size="40" required />
        </br></br>
    
	
        <strong><label for="pass">Mot de passe :</label></strong></br>
        <input type="password" name="pass" id="pass"  size="40" required />
        </br></br>


    </p>
    </fieldset></br>
    <div class="bouton">
    <input type="submit" value="Envoyer" name="submit"  />
	</form>

	

	</section>
	






</body> 
</html>

