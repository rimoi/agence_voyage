<!--  HTLM5 -->
<!DOCTYPE html>

<html lang="fr">
<!-- Entête -->
<head>




<title>Billet de voyage Terrestre pas cher </title>
<!-- Ici on va inclure les fichiers css -->

  <link rel="stylesheet" href="./css/moncss.css"> 
  <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">


</head>

<!-- Le corps body -->
<body background="image.jpg">


        <div >
                <div >
                        <h2>Bienvenue sur notre site de voyage Terrestre</h2>
						<h3>On vous souhaite en agr&eacute;able voyage</h3>

                 </div>       

	
	
<form  class="search" name="Search" action="inserer_base.php" method="POST">
    
    
        
			<div id="depart" class = "depart" >
				
						<label>
							<input type="radio" name="allerRetour"  value="true" id="allerSimple" onclick="document.getElementById('arrived').disabled=true"> Aller simple
						</label>
						<label>
							<input type="radio" name="allerRetour"  value="false" id="allerRetoure" onclick="document.getElementById('arrived').disabled=false"> Aller/Retour
						</label>
				
			</div>
			<div id = "nom" class="nom">
				<label>Pr&eacute;nom</label>
				
					<input type="text" name="prenom" />	
				
				<label>Nom</label>
				
					<input type="text" name="nom" />	
				<label>date de naissance</label>
				
					<input type="date" name="naissance" />
				
			</div>

			<!-- include permet d'inclure en fichier php externe -->
	
			<?php
				include("connect.php");
					
						
						
			?>

			<div id = "ville_depart" class="ville_depart">
				<label>Ville de d&eacute;part</label>
				
					<!-- inserer ici le code php de la liste déroulantes -->
					<select name="liste1">
					<option value=""></option> 
					<?php
						 $db1 = $bd->query('SELECT ville_depart FROM admin_agence');
						
						while($variable = $db1->fetch()){ 
							//echo $variable['ville'];
						   echo '<option value="'.$variable['ville_depart'].'">'.$variable['ville_depart'].'</option>';
						}
						
					?>
					</select> 	
				
				<label>Ville Arriver</label>
				
					<!-- inserer ici le code php de la liste déroulantes -->
					<select name="liste2" >
						 <option value=""></option> 
					<?php
						 $db1 = $bd->query('SELECT ville_arriver FROM admin_agence');
						
						while($variable = $db1->fetch()){ 
							//echo $variable['ville'];
						   echo '<option value="'.$variable['ville_arriver'].'">'.$variable['ville_arriver'].'</option>';
						}
					?>
					</select>  	
				
			</div>
    
			<div id = "disponibilite" class="disponibilite">
				<label>D&eacute;part le</label>
				
					<!-- inserer ici le code php de la liste déroulantes -->
					<select name="liste3" >
						 <option value=""></option> 
					<?php
						 $db1 = $bd->query('SELECT date_depart FROM admin_agence');
						
						while($variable = $db1->fetch()){ 
							//echo $variable['ville'];
						   echo '<option value="'.$variable['date_depart'].'">'.$variable['date_depart'].'</option>';
						}
					?>
					</select> 	
				
				
				
					<!-- inserer ici le code php de la liste déroulantes -->
					<label>Retour le</label>
					<select name="liste4" id="arrived" disabled="true">
						<option value=""></option> 
					<?php
						 $db1 = $bd->query('SELECT date_retour FROM admin_agence');
						
						while($variable = $db1->fetch()){ 
							//echo $variable['ville'];
						   echo '<option value="'.$variable['date_retour'].'">'.$variable['date_retour'].'</option>';
						}
						
					?>
					</select>  	
				
			</div>
			<div id = "num_voyageur" class="num_voyageur">
				<label>Nombre de voyageur</label>
				<input type="number" name="num_voyageur" min="1" max="6" value="1">
			</div>
			<div id = "envoie" class="envoie">
				
				
					<input type="submit" value="R&eacute;server" class="envoie1"/>
				
				
				
					<!-- inserer ici le code php de la liste déroulantes -->
					
					<input type="reset" value="R&eacute;initialiser" class="envoie1" /> 	
				
			</div>
    
    
</form>





</div>
	
 
</body>

</html>