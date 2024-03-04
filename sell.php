<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="asset/css/sell.css">
    <title>Page de vente</title>
    <script src="./asset/js/sell.js" defer></script>
</head>
<body>
    <header class="flex justify-content align-item">    
        <img class="logo" src="./asset/images/logo x150.png" alt="logo">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars" id="menu-opener"></i>
                <i class="fa-solid fa-xmark" id="menu-closer" hidden></i>
            </label>
            <ul class="menu flex justify-content">
                <li><a class="title-txt" href="buy.html">Acheter</a></li>
                <li><a class="title-txt" href="rent.html">Louer</a></li>
                <li><a class="title-txt" href="sell.html">Vendre</a></li>
                <li><a class="title-txt" href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="logo-mon-compte">
            <a class="active" href="#Mon_compte"><i class="fa-solid fa-user"></i> Mon compte</a>
        </div>
    </header>

    <main>
        <div class="top-content flex flex-in-center-column full-width">
            <img src="asset/images/sell/deventure-maison-pour-vendre.jpg" alt="Photo deventure maison">
            <div class="title-absolute flex-in-center-column">
                <h1 class="title-txt">Vous souhaitez vendre votre bien ?</h1>
                <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        
        <section class="flex full-width">
            <article class="step-block flex">
                <img src="asset/images/sell/serre-main.png" class="full-width" alt="Photo serrant la main">
                <div class="flex align-item full-width">
                    <p class="number_point">1</p>
                    <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <button class="info-button" type="button">
                    <strong>Conseils</strong>
                </button>
            </article>
    
            <article class="step-block flex">
                <img src="asset/images/sell/rappel.png" class="full-width" alt="Photo appel téléphonique">
                <div class="flex align-item full-width">
                    <p class="number_point">2</p>
                    <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <button class="info-button" type="button">
                    <strong>Contactez-nous</strong>
                </button>
            </article>
        </section>

        <div class="breadcrumb flex">
            <a href="index.html" class="content-text">Accueil</a>
            <p class="content-text">></p>
            <p class="content-text active">Vendre</p>
        </div>
    </main>

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
                        <li><a href="newsletter_registration.html">Inscription newsletter</a></li>
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
                        <li><a href="mailto:contact@acgdimmo.fr">contact@acgdimmo.fr</a></li>
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