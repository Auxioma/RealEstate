<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire gérer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="asset/css/to_manage.css">   
    <link rel="stylesheet" href="asset/css/header_footer.css">
    <script src="./asset/js/header.js" defer></script>
</head>
<body>
    <!--Lie le php a notre base de données-->
    <?php
    try {
        $mySqlClient = new PDO("mysql:host=localhost;dbname=acgd_immo;charset=utf8mb4", "root","");
    }
    catch (Exception $e) {
        die("Error".$e -> getMessage());
    }
    ?>
    <!-- Header -->
    <?php
        require 'header.php';
    ?>

    <?php
        $prepareData = $mySqlClient -> prepare('SELECT * FROM user');
        $prepareData -> execute();
        $datas = $prepareData -> fetchAll();
        foreach ($datas as $data){
            echo $data['firstname'];
        }
    ?>
    <!-- Bloc barre de recherche -->
    <div class="flex-center search_bar">
        <!-- Icone localisation -->
        <div class="icon_search">
            <img src="asset/images/to_manage/icon-localisation.svg" alt="icon_search">
        </div>
        <!-- Barre de recherche -->
        <div class="bar_search">
            <input type="search" placeholder="Exemple : 123 rue de la Goutte">
        </div>
        <div>
            <button class="button_search">
                Rechercher
            </button>
        </div>
    </div>
    <!-- Texte de présentation faire gérer -->
        <div class="presentation_to_manage flex-center">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat 
                tristique ex. Etiam a volutpat sem. Nunc risus sapien, faucibus ut 
                semper ut, lobortis nec quam. Nullam semper accumsan dictum. Integer 
                mollis risus eget est malesuada varius. Donec blandit feugiat risus.
            </p>
        </div>
    <!-- Section service 1 et 2 -->
    <section class="bloc_article">
        <!-- Service 1 -->
        <article class="article_1">
            <div>
                    <h1 class="title_service">
                        Service 1
                    </h1>
                </div>
            <main>
                    <img class="image_service_1" src="asset/images/to_manage/image_to_manage1.jpg" alt="image_home">
            </main>
            <footer class="footer_article">
                    <p class="text_service">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat 
                        tristique ex. Etiam a volutpat sem. Nunc risus sapien, faucibus ut 
                        semper ut, lobortis nec quam. Nullam semper accumsan dictum. Integer 
                        mollis risus eget est malesuada varius. Donec blandit feugiat risus.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat 
                        tristique ex. Etiam a volutpat sem. Nunc risus sapien, faucibus ut 
                        semper ut, lobortis nec quam. Nullam semper accumsan dictum. Integer 
                        mollis risus eget est malesuada varius. Donec blandit feugiat risus.
                    </p>
            </footer>
        </article>
        <!-- Service 2 -->
        <article class="article_2">
            <div>
                <h1 class="title_service2">
                    Service 2
                </h1>
            </div>
            <main>
                <img class="image_service2" src="asset/images/to_manage/image_to_manage2.jpg" alt="image_home_2">
            </main>
            <footer class="footer_article">
                <p class="text_service2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat 
                    tristique ex. Etiam a volutpat sem. Nunc risus sapien, faucibus ut 
                    semper ut, lobortis nec quam. Nullam semper accumsan dictum. Integer 
                    mollis risus eget est malesuada varius. Donec blandit feugiat risus.

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat 
                    tristique ex. Etiam a volutpat sem. Nunc risus sapien, faucibus ut 
                    semper ut, lobortis nec quam. Nullam semper accumsan dictum. Integer 
                    mollis risus eget est malesuada varius. Donec blandit feugiat risus.
                </p>
            </footer>
        </article>
    </section>
    <!-- Statistques -->
    <section class="bloc_stats">
        <!-- Titre -->
        <div>
            <h1 class="title_stats">
                Statistiques
            </h1>
        </div>
        <!-- Logo -->
        <main>
            <div class="icone_stats">
                <div>
                    <img src="asset/images/to_manage/icone_stats_1.svg" alt="icone_stats">
                    <p>120 000 Lots</p>
                </div>
                <div>
                    <img src="asset/images/to_manage/icone_stats_2.svg" alt="icone_stats">
                    <p>120 000 Lots</p>
                </div>
                <div>
                    <img src="asset/images/to_manage/icone_stats_3.svg" alt="icone_stats">
                    <p>120 000 Lots</p>
                </div>
                <div>
                    <img src="asset/images/to_manage/icone_stats_4.svg" alt="icone_stats">
                    <p>120 000 Lots</p>
                </div>
                <div>
                    <img src="asset/images/to_manage/icone_stats_5.svg" alt="icone_stats">
                    <p>120 000 Lots</p>
                </div>
            </div>
        </main>
    </section>
    <!-- Footer -->
    <?php
        require 'footer.php';
    ?>
</body>
</html>