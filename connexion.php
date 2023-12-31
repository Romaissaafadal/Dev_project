<?php

function connexion(){
	try
	{
		global $bdd;
		$bdd = new PDO('mysql:host=localhost;dbname=u-glow;charset=utf8', 'root', '');

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
}
?>