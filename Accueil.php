<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport & Compagnie - Acceuil</title>
    <link rel="stylesheet" type="text/css" href="./Style/Accueil.css">

</head>
<body>
    <div id="entete">
        <?php include './Elements/Header.php'; ?>
        <p id="slogan" class="titre overlay">PRENONS LA<br>ROUTE <br>ENSEMBLE...</p>
        <img id="LOGO_entete" class="overlay" src="./Images/LOGO_BLANC.png" alt="Transport et Compagnie">
    </div>

    <div id="Presentation">
        <div id="txt_presentation">
            <div class="titre">À PROPOS DE NOUS</div>
            <br>
            <p>Transport et Compagnie vous offre un service d'accompagnement au quotidien sur Troyes et toute sa région mais aussi pour des évènements occasionelles dans une plus large sélection de régions.
            </p>
            <br>
            <br>
            <div>
                <button class="button blue_button">En savoir plus</button>
            </div>
        </div>
        <div id="img_presentation"></div>
    </div>

    <div id="Pourquoi_nous">
        <div id="titre_pourquoi">POURQUOI NOUS ?</div>
        <div id="arguments_container">
            <div id="flexibilité" class="arguments">
                <img class="img_arguments" src="./Images/hand-shake.png" alt="">
                <p>FLEXIBILITÉ</p>
                <p class="txt_arguments">Les prix sont adaptés à l'événement et à son envergure.  Vous n'aurez aucune surprise puisque les prix sont fixés à l'avance.</p>
            </div>
            <div id="Ponctualité" class="arguments">
                <img class="img_arguments" src="./Images/time-left.png" alt="">
                <p>PONCTUALITÉ</p>
                <p class="txt_arguments">Notre société met un point d'honneur à être ponctuel en toute circonstance et à respecter les consignes de sécurité qui s'impose.</p>
            </div>
            <div id="Fiabilité" class="arguments">
                <img class="img_arguments" src="./Images/checked.png" alt="">
                <p>FIABILITÉ</p>
                <p class="txt_arguments">Pour tout type de transport, la fiabilité du service est assurée à chaque étape, de la préparation des parcours jusqu'au transport effectif.</p>
            </div>
        </div>
    </div>

    <div id="Services">
        <div class="image_container">
            <button class="overlay-button button blue_button">Découvrir nos offres</button>
        </div>
        <div class="text_container">
            <div id="text_services">
                <p class="titre">NOS SERVICES</p>
                <p class="services">Navettes aéroports/gares</p>
                <p class="services">Collectivité et Associations</p>
                <p class="services">Professionnels du voyage</p>
                <p class="services">Transport évènementiel</p>
                <p class="services">Etablissements spécialisées</p>
            </div>
        </div>
    </div>

    <div id="Avis">

    </div>

    <div id="Partenaires">

    </div>
    <div>
        
    </div>
</body>
</html>