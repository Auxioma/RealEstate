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

<body>

<?php require 'modele/connect_index.php'; ?> 


<!-- logo avec menu principal -->
<!-- include of header php file -->
<?php include './vue/template/header.php'; ?>

<main>
<!-- bannière avec fonction recherche -->
    <section class="banner">
        <div class="search">
            <form id="search_form" class="menu_search">
                <div class="size_form">
                    <select name="search" id="take_search" class="menu_search_deco size_search" required >
                        <option class="value_bold" value="">Je cherche ...</option>
                        <option value="vente">Vente</option>
                        <option value="location">Location</option>
                    </select>
                </div>
                <div class="size_form">   
                        <input name="local" id="take_local" class="menu_search_deco size_search" type="text" placeholder=" Localisation..." required />
                </div>
                <div class="size_form">
                    <select name="type" id="take_type" class="menu_search_deco size_search" required >
                        <option class="value_bold" value="">Type de biens ...</option>
                        <option value="appartement" >Appartement</option>
                        <option value="maison">Maison</option>
                        <option value="terrain">Terrain</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="size_form">
                    <input name="price" id="take_price" class="menu_search_deco size_search" type="text" placeholder=" Prix..." required /> 
                </div>
                <div class="size_form">
                    <div class="search_btn">
                        <input type="submit" id="submitButton" class="menu_search_deco size_search" value="Rechercher" />
                    </div>
                </div>
            </form>
        </div>
    </section>
    
<!-- section actualités -->
    <section>
        <div class="news">
            <h1>Les actualités de l'immobilier</h1>
            <div class="news_slide">
                <div class="size_flex">
                    <div class="news_1"><a class="activ_news" href="./vue/template/breaking_news_1.php">Lorem ipsum first</a></div>
                </div>
                <div class="size_flex">
                    <div class="news_2"><a class="activ_news" href="./vue/template/breaking_news_2.php">Lorem ipsum second</a></div>
                </div>
                <div class="size_flex">
                    <div class="news_3"><a class="activ_news" href="./vue/template/breaking_news_3.php">Lorem ipsum third</a></div>
                </div>
                <div class="size_flex">
                    <div class="news_all">
                        <a class="activ_news_all" href="./asset/articles_index/list_articles_index.php"><span>Toutes nos actualités</span></a>
                        <div>
                            <a class="activ_news_all_btn" href="./vue/template/list_articles_index.php"><span>&rsaquo;</span></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<!-- derniers biens en vente -->
    <section>
        <div class="sell">
        <h1>Nos derniers biens en vente</h1>
        <div class="sell_slide">
            <div class="sell_frame" id="frame_1">
                <p>145000€</p>
                <p>MAISON</p>
                <P>SAINT-JUNIEN</p>
                <a class="activ_sell" href="#"><img src="./vue/images/home/bien_1.jpg" alt="bien 1 acgdimmo" width="200"></a>
                <div class="sell_type">
                    <p><i class="fa-solid fa-bed"></i><span>4</span></p>
                    <div class="vertical_row"></div>
                    <p><i class="fa-regular fa-square"></i><span>120 m²</span></p>
                </div>
            </div>
            <div class="sell_frame" id="frame_2">
                <p>119000€</p>
                <p>MAISON</p>
                <P>SAINT-JUNIEN</p>
                <a class="activ_sell" href="#"><img src="./vue/images/home/bien_2.jpg" alt="bien 2 acgdimmo" width="200"></a>
                <div class="sell_type">
                    <p><i class="fa-solid fa-bed"></i><span>2</span></p>
                    <div class="vertical_row"></div>
                    <p><i class="fa-regular fa-square"></i><span>90.3 m²</span></p>
                </div>
            </div>
            <div class="sell_frame" id="frame_3">
                <p>139000€</p>
                <p>MAISON</p>
                <P>SAINT-JUNIEN</p>
                <a class="activ_sell" href="#"><img src="./vue/images/home/bien_3.jpg" alt="bien 3 acgdimmo" width="200"></a>
                <div class="sell_type">
                    <p><i class="fa-solid fa-bed"></i><span>4</span></p>
                    <div class="vertical_row"></div>
                    <p><i class="fa-regular fa-square"></i><span>135 m²</span></p>
                </div>
            </div>
                <div class="sell_frame" id="frame_4">
                    <p>45000€</p>
                    <p>GRANGE</p>
                    <P>SAINT-JUNIEN</p>
                    <a class="activ_sell" href="#"><img src="./vue/images/home/bien_4.jpg" alt="bien 4 acgdimmo" width="200"></a>
                    <div class="sell_type">
                        <p><i class="fa-solid fa-bed"></i><span>0</span></p>
                        <div class="vertical_row"></div>
                        <p><i class="fa-regular fa-square"></i><span>165 m²</span></p>
                    </div>
                </div>
            </div> 
        </div>
        <div class="navbar_sell">
            <div>
                <a class="activ_news_all_btn" href="#"><span>&lsaquo;</span></a>
            </div>
            <div>
            <ul >
                <li class="navbar_sell_min_btn"></li>
                <li class="navbar_sell_min_btn"></li>
                <li class="navbar_sell_min_btn"></li>
            </ul>
            </div>
            <div>
                <a class="activ_news_all_btn" href="#"><span>&rsaquo;</span></a>
            </div>
        </div>
    </section>

<!-- section avis clients -->
    <section class="customers">
        <h1>Avis clients</h1>
        <p>Ce que nos clients pensent de notre travail</p>
        <div class="button"><a href="customer-feedback.html">Lire les témoignages</a></div>
    </section>

<!-- section article agence -->
    <section class="agency">
        <div class="bkg_agency">
            <h1>Votre agence ACGD IMMO en Limousin</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p></br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="center_button">
                <div class="button_estimate">
                    <div class="button"><a href="estimate.php">Estimons votre bien</a></div>
                </div>
                <div class="button_manage">
                    <div class="button"><a href="to_manage.php">Gérons votre bien</a></div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- footer -->
<!-- include of footer php file -->
<?php include './vue/template/footer.php'; ?>

<div class="copyright">
    <p>copyright <i class="fa-regular fa-copyright"></i> acgd immo</p>
</div>

</body>

</html>