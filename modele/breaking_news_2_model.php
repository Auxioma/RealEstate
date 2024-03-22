<?php 

$sql = "SELECT * FROM `articles` WHERE `id`=2";
$requete =$db->query($sql);
$articles = $requete->fetch();

?>