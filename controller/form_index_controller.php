<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/724458d0e8.js" crossorigin="anonymous"></script>
    <script src="/RealEstate/vue/javascript/header.js" defer></script>
    <script src="/RealEstate/vue/javascript/index.js" defer></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <title>Accueil</title>
    <link rel="stylesheet" href="/RealEstate/vue/css/header_footer.css">
    <link rel="stylesheet" href="/RealEstate/vue/css/index.css">

</head>

<?php
require '../modele/connect_index.php';
$local= $_POST["local"];
//$sql = "SELECT * FROM `houses` WHERE `id`= :id";
$sql = "SELECT * FROM `houses` INNER JOIN `search`ON houses.id_area=search.id WHERE rented=1 AND sold=1 AND area=$local;";//a place limoges mettre variable locable

$requete = $db->prepare($sql);

$requete->bindValue("")

$requete->execute();

$houses = $requete->fetchAll();

?>

<section>
    <?php foreach ($houses as $house): ?>
        <article>
            <?= $house["type"].$house["price"] ?>
        </article>
    <?php endforeach; ?>
</section>