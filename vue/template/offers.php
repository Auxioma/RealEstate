<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos offres d'emploi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="../javascript/offers.js" defer></script>
    <link rel="stylesheet" href="../css/header_footer.css">
    <script src="../javascript/header.js" defer></script>
    <link rel="stylesheet" href="./asset/css/offers.css">
    <link rel="stylesheet" href="../css/offers.css">
</head>

<body>
   
<?php 
try {
    $mySqlClient = new PDO('mysql:host=localhost;dbname=acgd_immo;charset=utf8mb4', 'root', '');
} catch(Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>

<?php
require '../template/header.php';
?>

<?php
$prepareData = $mySqlClient -> prepare('SELECT * FROM user');
$prepareData -> execute();
$datas = $prepareData -> fetchAll();
foreach ($datas as $data) {
echo $data['phone_number'];
}
?>




    <div class="mobile">
        <div class="mobile-top-offer">
            <div class="mobile-top-text">
                <p>Offres à la Une</p>
            </div> <img id="top-offer1" src="./asset/images/offers/top-offer.jpg" alt=""> <img id="top-offer2"
                src="./asset/images/offers/top-offer.jpg" alt=""> <img id="top-offer3"
                src="./asset/images/offers/top-offer.jpg" alt="">
            <div class="background-color"></div>
        </div>
        <div class="mobile-search-filters">
            <div class="logo-form"> <i class="fa-solid fa-magnifying-glass"></i><input id="form-mobile" type="text" 
                    placeholder="Tapez votre recherche">                                    
                <div class="form-contract"> x </div>
            </div>
        </div>
        <div class="mobile-map"> <iframe id="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88855.56780126509!2d0.802923295652055!3d45.89658301200862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47feeadaef87b0c9%3A0x8b265b0dc126d53e!2s87200%20Saint-Junien!5e0!3m2!1sfr!2sfr!4v1705492808751!5m2!1sfr!2sfr"
                width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
        <h2 class="mobile-h2">Nos dernières offres</h2>
        <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                    src="asset/images/offers/photo_offer.jpg" alt="photo de l'offre">
                <figcaption class="agent">Agent immobilier F/H</figcaption>
            </a> </div>
        <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                    src="asset/images/offers/photo_offer.jpg" alt="photo de l'offre">
                <figcaption class="agent">Agent immobilier F/H</figcaption>
            </a> </div>
        <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                    src="asset/images/offers/photo_offer.jpg" alt="photo de l'offre">
                <figcaption class="agent">Agent immobilier F/H</figcaption>
            </a> </div>
        <div class="directions"> <a class="go-left" href="#"><span>&#8592;</span></a> <a class="go-right"
                href="#"><span>&#8594;</span></a> </div>
        <ul class="mobile-paging">
            <div class="directions2"> <a class="go-left" href="#"><span>&#8592;</span></a> </div>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <div class="directions2"> <a class="go-right" href="#"><span>&#8594;</span></a> </div>
            </li>
        </ul>
        <div id="form-container"> <label for="page-select"></label> <select id="mobile-page-select">
                <option value="page1">Page 1</option>
                <option value="page2">Page 2</option>
                <option value="page3">Page 3</option>
                <option value="page3">Page 4</option>
                <option value="page3">Page 5</option>
            </select> </div>
        <p id="announce-number">... - ... sur ... annonces</p>
        <div class="section2-to-apply">
            <p>Rejoignez notre source de talents</p> <button class="to-apply">POSTULER</button>
        </div>
        <div class="about"> <button class="about-us">Mieux nous connaître</button></div>
    </div>
    <div class="desktop">
        <main>
            <section class="section1">
                <div class="section1-title">
                    <h3>Nos offres d'emploi</h3>
                </div>
                <div class="section1-form">
                    <form>
                        <div class="logo-form"> <i class="fa-solid fa-briefcase"></i> <input id="form" type="text"
                                placeholder="Emploi"> </div>
                    </form>
                    <form>
                        <div class="logo-form2"> <i class="fa-solid fa-location-dot"></i> <input id="form" type="text"
                                placeholder="Où"> </div>
                    </form>
                    <div class="responsive-research"> <i class="fa-solid fa-magnifying-glass"></i><input id="research"
                            type="submit" value="Rechercher"> </div>
                </div>
                <div class="desktop-form-contract"> <select name="contract" id="form2">
                        <option value="Contrat">Contrats</option>
                        <option value="Contrat">CDD</option>
                        <option value="Contrat">CDI</option>
                        <option value="Contrat">Stage</option>
                        </optgroup>
                    </select>
                    <div class="refresh-logo-reinitiate"> <a href="offers-last.html">
                            <div class="reinitiate"> <a class="refresh-logo-reinitiate" href="offers-last.html">
                                <i id="rotate" class="fa-solid fa-rotate-right"></i>Réinitialiser</a> </div>
                        </a> </div>
            </section>
            <div class="section2-title">
                <div class="desktop-map"> <iframe id="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88855.56780126509!2d0.802923295652055!3d45.89658301200862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47feeadaef87b0c9%3A0x8b265b0dc126d53e!2s87200%20Saint-Junien!5e0!3m2!1sfr!2sfr!4v1705492808751!5m2!1sfr!2sfr"
                        width="95%" height="95%" style="border: 1px solid #b1f3b1b1;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                <h4 class="h4">Nos offres</h4>
                <h4 class="h4-responsive">Nos dernières offres</h4>
            </div>
            <section class="section2">
                <div class="photos-map">
                    <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                                src="vue/images/offers/photo_offer.jpg" alt="photo de l'offre">
                            <figcaption class="agent">Agent immobilier F/H</figcaption>
                        </a> </div>
                    <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                                src="vue/images/offers/photo_offer.jpg" alt="photo de l'offre">
                            <figcaption class="agent">Agent immobilier F/H</figcaption>
                        </a> </div>
                    <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                                src="vue/images/offers/photo_offer.jpg" alt="photo de l'offre">
                            <figcaption class="agent">Agent immobilier F/H</figcaption>
                        </a> </div>
            </section>
            <section class="section2">
                <div class="photos-map">
                    <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                                src="vue/images/offers/photo_offer.jpg" alt="photo de l'offre">
                            <figcaption class="agent">Agent immobilier F/H</figcaption>
                        </a> </div>
                    <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                                src="vue/images/offers/photo_offer.jpg"" alt=" photo de l'offre">
                            <figcaption class="agent">Agent immobilier F/H</figcaption>
                        </a> </div>
                    <div class="section2-photos"> <a href="offers-last.html"> <img id="offer-photo"
                                src="asset/images/offers/photo_offer.jpg" alt="photo de l'offre">
                            <figcaption class="agent">Agent immobilier F/H</figcaption>
                        </a> </div>
            </section>
            <ul class="paging">
                <div> <a class="go-left" href="#"><span>&#8592;</span></a> </div>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <div> <a class="go-right" href="#"><span>&#8594;</span></a> </div>
                </li>
            </ul>
            <div id="form-container"> <label for="page-select"></label> <select id="page-select">
                    <option value="page1">Page 1</option>
                    <option value="page2">Page 2</option>
                    <option value="page3">Page 3</option>
                    <option value="page3">Page 4</option>
                    <option value="page3">Page 5</option>
                </select> </div>
            <p id="announce-number">... - ... sur ... annonces</p>
            <div class="section2-to-apply">
                <p>Rejoignez notre source de talents</p> <button class="to-apply">POSTULER</button>
            </div>
            <section class="section3">
                <div class="section3-title">
                    <h4>Mieux nous connaître</h4>
                </div>
                <div class="slogan">
                    <div class="agency">
                        <h3>"Clé en main bonheur certain !"</h3>
                        <p class="description"> <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodot. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodot. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                eaodot.</span></p>
                    </div>
                    <div class="photo7"> <img id="agency" src="asset/images/offers/agency.jpg" alt="photo 2"
                            width="537.5"> </div>
                </div>
                <h3 class="testimonies">Témoignages de l'équipe</h3>
                <div class="photo123">
                    <div class="photo"> <img id="team" src="asset/images/offers/real_estate_agent_1.jpg" alt="photo 1"
                            width="200px">
                        <figcaption> <strong> Lorem - dolor sit </strong> </figcaption>
                        <p class="testimony"> <i class="testimony1"> Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</i></p>
                    </div>
                    <div class="photo"> <img id="team" src="asset/images/offers/real_estate_agent_2.jpg" alt="photo 2"
                            width="200px">
                        <figcaption><strong> Lorem - dolor sit </strong> </figcaption>
                        <p class="testimony"> <i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i>
                        </p>
                    </div>
                    <div class="photo"> <img id="team" src="asset/images/offers/real_estate_agent_3.jpg" alt="photo 3"
                            width="200px">
                        <figcaption> <strong> Lorem - dolor sit </strong> </figcaption>
                        <p class="testimony"> <i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i>
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php
require '../template/footer.php';
?>

</body>

</html>

