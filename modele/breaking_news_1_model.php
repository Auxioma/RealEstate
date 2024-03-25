<?php 

$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";
$requete =$db->query($sql);
$articles = $requete->fetch();

?>
