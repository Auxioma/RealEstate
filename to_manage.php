<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire gérer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="asset/css/to_manage.css">
</head>
<body>
    <!-- Header -->
    <header class="header flex justify-content align-item">    
        <!-- Logo ACGD-->
        <img class="logo" src="./asset/images/logo x150.png" alt="logo">
        <!-- Menu Nav -->
        <nav>
            <ul class="menu flex justify-content">
                <li><a class="title-txt" href="buy.html">Acheter</a></li>
                <li><a class="title-txt" href="rent.html">Louer</a></li>
                <li><a class="title-txt" href="sell.html">Vendre</a></li>
                <li><a class="title-txt" href="contact.html">Contact</a></li>
            </ul>            
        </nav>
        <!-- Bouton connexion -->
        <div class="logo-mon-compte">
            <a class="active" href="#Mon compte"><i class="fa-solid fa-user"></i> Mon compte</a>
        </div>
    </header>
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
    <footer>
        <div class="colonne">
            <div class="footer-logo">
                <a href="index.html"><img class="logo" src="./asset/images/logo_white_150.png" alt="Logo" width="150px" height="73px"></a>
                <p>Retrouvez-nous sur les réseaux sociaux</p>

                <ul class="social-media">
                    <li><i  id="fb" class="fa-brands fa-facebook"></i></li>
                    <li><i  id="tw" class="fa-brands fa-twitter"></i></li>
                    <li><i  id="insta" class="fa-brands fa-instagram"></i></li>
                </ul>
            </div>
            <div class="footer-queries">
                <div class="footer-services">
                    <h2>Services</h2>

                    <ul class="flex">
                        <li><a href="buy.html">Achat</a></li>
                        <li><a href="sell.html">Vendre</a></li>
                        <li><a href="rent.html">Louer</a></li>
                    </ul>
                </div>
                <div class="footer-access">
                    <h2>Accès rapide</h2>

                    <ul class="flex">
                        <li><a href="newsletter registration.html">Inscription newsletter</a></li>
                        <li><a href="aboutus.html">Qui sommes-nous ?</a></li>
                        <li><a href="offers.html">Nos offres d'emploi</a></li>
                        <li><a href="customer-feedback.html">Avis client</a></li>
                        <li><a href="sitemap.html">Plan du site</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h2>Contact</h2>

                    <ul class="flex">
                        <li><a href="tel:06.08.16.45.22">06.08.16.45.22</a></li>
                        <li><a href="mailto:contact@acgdimmo.fr">contact@acgdimmo.fr</li></a>
                        <li><a target="_blank" href="https://www.google.fr/maps/place/87200+Saint-Junien/@45.8964635,0.802924,12z/data=!3m1!4b1!4m6!3m5!1s0x47feeadaef87b0c9:0x8b265b0dc126d53e!8m2!3d45.88716!4d0.901165!16zL20vMDh6Xzkz?entry=ttu">Saint-Junien</a></li>
                    </ul>
                </div>
                </div>
            </div>
                <div class="copyright">
                    <p>acgdimmo©</p>
                </div>
        
        </footer>
</body>
</html>