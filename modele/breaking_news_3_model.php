<?php 

$sql = "SELECT * FROM `articles` WHERE `id`=1";
$requete =$db->query($sql);
$articles = $requete->fetch();

?>