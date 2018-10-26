<?php
$hostname = "localhost";
$db = "bd_visitact_v1";
$user = "root";
$password = "";
try
{
    $db = new PDO("mysql:host=$hostname;dbname=$db", "$user", "$password", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e)
{
    die("<strong>Erreur lors de la connexion à la base</strong> : ".$e->getMessage());
}
?>