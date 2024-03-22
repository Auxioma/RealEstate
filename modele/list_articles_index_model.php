<?php 
//require 'connect_index.php';

$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";
$requete =$db->query($sql);
$articles = $requete->fetchAll();

//include '../../header.php';
?>