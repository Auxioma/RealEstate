<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/724458d0e8.js" crossorigin="anonymous"></script>
    <script src="./asset/js/header.js" defer></script>
    <script src="./asset/js/index.js" defer></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <title>Articles</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/index.css">

</head>

<?php
require '../php/connect_index.php';

include '../../header.php';

require '/RealEstate/modele/list_articles_index_model.php';
?>

<section>
    <?php foreach($articles as $article): ?>
        <article>
            <h1><a href="article_index.php?id=<?= $article["id"] ?>"><?= $article["title"] ?></a></h1>
            <p><?= $article["created_at"] ?></p>
            <div><?= $article["content"] ?></div>
        </article>
<?php endforeach; ?> 
</section>

<?php include '../../footer.php'; ?>
