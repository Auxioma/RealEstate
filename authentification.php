<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/authentification.css">
    <title>authentification</title>

</head>
<body>
    <header class="flex justify-content align-item">    
        <a href="index.html"><img class="logo" src="./asset/images/logo x150.png" alt="logo"></a>
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        <nav>
            <ul class="menu flex justify-content">
                <li><a class="title-txt" href="buy.html">Acheter</a></li>
                <li><a class="title-txt" href="rent.html">Louer</a></li>
                <li><a class="title-txt" href="sell.html">Vendre</a></li>
                <li><a class="title-txt" href="contact.html">Contact</a></li>
            </ul>            
        </nav>
        <div class="logo-mon-compte">
            <a class="active" href="#"><i class="fa-solid fa-user"></i> Mon compte</a>
        </div>
    </header>


<div class="parent2">
    <form action="" method="post">
        <h2>Login form</h2>
        <div class="container">
            <input type="text" placeholder=" enter Email" name="email" required>
            <input type="password" placeholder="enter Password" name="password" required>
            <a href="#" id="forgot-password"> Forgot password?</a>
            <button type="submit" id="login-btn">log in</button>
        </div>
        <div class="member">
            not a member? <a href="./inscription.html" id="signup-link"> Sign up</a>
        </div>

    </form>

         <div class="image">
            <img class="test" src="asset/images/agent-immobilier-ecologie.jpeg" alt="image agent-immobilier-ecologie"  >    
        </div>
</div>
       




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