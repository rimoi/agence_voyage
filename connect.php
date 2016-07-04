
<?php
try{
	$bd = new PDO('mysql:host=localhost:3306;dbname=agence_voyage;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(Exception $e){
	
	die('Erreur : '.$e->getMessage());
}

?>