<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="../vue/javascript/header.js"defer></script>
    <script src="../vue/javascript/contact.js"defer></script>
    <title>CONTACT</title>
    <!--lien pour bonhomme-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- appel des header/footer communs-->
    <link rel="stylesheet" href="../css/header_footer.css">
    <!--appel de la page perso-->
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>
<!--common header-->
<?php require 'header.php';?>

<main>
    <div class="background-picture">
        <div class="wallpaper"></div>
        <section class="page-title">
            <article class="contact">
                <h1>NOUS CONTACTER</h1>
                <p><i>Nous nous engageons à vous répondre sous 48h ouvrés</i></p>
            </article>
        </section>

        <section class="phone-numbers">
            <article class="phone">
                <p><strong>Pour une question relative à une annonce :</strong></p>
                <p><i>Contacter l'agence au 01.02.03.04.05</i></p>
            </article>
            <article class="phone">
                <p><strong>Pour une prise de rendez-vous pour une visite :</strong></p>
                <p><i>Contacter l'agence au 01.23.45.67.89</i></p>
            </article>
        </section>

        <!--formulaire-->
        <p class="other-request"><strong>Pour toute autre demande, vous pouvez utiliser le formulaire de contact suivant :</strong></p>
        <section class="form">  
            <article class="formatting">
                <!--check for cookie presence-->
                <?php 
                    /*if (isset ($_COOKIE ['cookieForm'])){
                        $requiredFields= $_COOKIE['cookieForm'];
                        echo 'HELLO, I AM '. $requiredFields;
                    }else {
                        echo "ERROR";
                    }*/
                ?> 
                
                <!--form contact process--> 
                <form method="POST" action="../../controller/formContact_processing.php">                
                    <div class="form1">
                        <label for="name">
                        <input type="text" id="name" name="name" placeholder="Nom* :">
                        </label>

                        <label for="first-name">
                        <input type="text" id="first-name" name="first-name" placeholder="Prénom* :">
                        </label>

                        <label for="email">
                        <input type="email" id="email" name="email" placeholder="Email* :">
                        </label>  
                    </div>     
                    
                    <div class="form2" >  
                        <div class="subject">
                            <label for="subject-select">Sujet* :</label>
                            <select id="subject-select" name="subject">
                                <optgroup label="Particuliers">
                                    <!--value empty -> subject required --> 
                                    <option value=""></option>
                                    <option value="Mon espace personnel">Mon espace personnel</option>
                                    <option value="Recherche d'un bien">Recherche d'un bien</option>
                                    <option value="Vendre son bien">Vendre son bien</option>
                                    <option value="L'alerte immo">L'alerte immo</option>
                                    <option value="Données personnelles : exercer mes droits">Données personnelles : exercer mes droits</option>
                                    <option value="Problèmes techniques sur le site">Problèmes techniques sur le site</option>
                                </optgroup>
                                <optgroup label="Professionnels">
                                    <option value="Partenariat">Partenariat</option>
                                    <option value="Régie publicitaire">Régie publicitaire</option>
                                    <option value="Offres commerciales">Offres commerciales</option>
                                </optgroup>
                            </select>                    
                        </div>

                        <label for="message">
                        <textarea name="message" rows="10" cols="63" id="message" placeholder="Votre message* :"></textarea>                    </label>
                        
                        <div class= "submit">
                        <button type="submit">Envoyer</button>
                        </div>
                    </div> 
                    
                </form> 
                
                               
                <?php $requiredFields= $_COOKIE['cookieForm']; ?>   

            </article>
        </section>

        <section class="find-us">     
            <article>
                <p class="social-networks"><strong>Retrouvez-nous sur nos réseaux sociaux</strong></p>
                <a href="https://www.facebook.com/"><img src="../images/logosContact/facebook_f_logo_(2021).svg" alt="logo" width="50" height="50"></a>
                <a href="https://www.instagram.com/"><img src="../images/logosContact/instagram_logo_2016.svg" alt="logo"width="50" height="50"></a>
                <a href="https://www.youtube.com/"><img src="../images/logosContact/youtube_social_white_square_(2017).svg" alt="logo" width="50" height="50"></a>
                <a href="https://www.linkedin.com/"><img src="../images/logosContact/linkedIn_icon.svg" alt="logo"width="50" height="50"></a>
            
                <p class="social-networks"><strong>Et sur l'application</strong></p>
                <a href="googlemybusiness"><img src="../images/logosContact/Google-My-Business_logo.svg" alt="logo"width="50" height="50"></a>
            </article>

            <article class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44427.813926552095!2d0.8441252993535505!3d45.89654548272686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47feeadaef87b0c9%3A0x8b265b0dc126d53e!2s87200%20Saint-Junien!5e0!3m2!1sfr!2sfr!4v1705479222960!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </article>
        </section>

        <p class="fields"> (*) champs obligatoires</p>
        <a href="" class="rgpd">Pour toute demande relative au traitement de vos données personnelles et / ou exercer vos droits, cliquez ici https://www.cnil.fr/fr/textes-officiels-europeens-protection-donnees</a>

    </div>

</main>

<!--common footer-->
<?php require 'footer.php';?>

</body>

</html>