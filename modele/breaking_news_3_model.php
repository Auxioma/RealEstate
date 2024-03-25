<?php 

$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC  LIMIT 2, 1";
$requete =$db->query($sql);
$articles = $requete->fetch();

?>