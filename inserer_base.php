
<?php
	include("connect.php");
	//var_dump($_POST['liste4']==null);die();
	//var_dump($_POST['naissance']);die();
	// htmlspecialchars permet de nous échapper au faille XSS.
	if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['naissance'])){
		/* ce test va nous permettre de vérifier si l'année est valide ou pas, intval permet de nous Retourner la valeur numérique entière équivalente d'une variable.
		*	substr permet de nous retourner une partie de la chaine sachant que l'annee retourner par le formulaire est sous cette forme 2012-02-22. 
		*/  
		if(intval(substr($_POST['naissance'], 0,4)) > 2016 ){
			echo "Impossible d etre ne dans le future :)";
		} else{
			// dans cette variable j'utilise operateur ternaire pour verifier si la valeur et null on le remplace par NULL. 
			$variable = empty($_POST['liste4'])?'NULL':$_POST['liste4'];
			$bd1 = $bd->prepare('INSERT INTO reservation_client(prenom,nom,date_naissance,ville_depart,ville_arriver,date_depart,date_retour,num_voyage) values(?,?,?,?,?,?,?,?);');
			$bd1->execute(array(
							htmlspecialchars($_POST['prenom']),
							htmlspecialchars($_POST['nom']),
							htmlspecialchars($_POST['naissance']),
							$_POST['liste1'],
							$_POST['liste2'],
							$_POST['liste3'],
							$variable,
							$_POST['num_voyageur']
						)
				);
			echo "<h3 style=\"background-color:blue; float: left;width: auto;height:50px;border: 1px solid black;position: fixed; top: 80px;\">Merci de votre pr&eacute;-reservation , on vous s'invite a venir &aacute; l'agence pour finaliser votre r&eacute;servation le plus rapidement possible.</h3> <br /> <h6 style=\"position:fixed;top: 500px; right:306px\"> Vous pouvez r&eacute;gler &aacute; l'agence par espece ou ch&eacute;que.</h6>";
			}
	}
?>