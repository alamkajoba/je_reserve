<?php
include_once('config.php');
$host=HOST;
$dbname=DATABASE;
$user=USER;
	try{
	$bdd = new PDO("mysql:host=$host; dbname=$dbname","$user","", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
	}
	catch(Exception $e){
		die('Erreur '.$e->getMessage());
	}

