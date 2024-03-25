<?php 

$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC  LIMIT 1, 1";
$requete =$db->query($sql);
$articles = $requete->fetch();

?>