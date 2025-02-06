<h1>Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d'acceder au site d'Elan formation .<br>
Le lien doit s'ouvrir dans un nouvel onglet (_blank).

</p>

<h2>Resultat</h2

<!-- <style>
    <!-- .lien {
        padding: 10px 20px;
        background-color: blue;
        color: white;
        texte-decoration: none;
        border-radius: 5px;
        font-size: 18px;
    } -->

<!-- </style> --> 

<?php


 $texte = "Elan Formation";
 $url = "https://www.elanformation.fr";
function creerLienNouvelOnglet($url, $texte){
    // "target="_blank":Ouvre le lien dans un nouvel onglet
    // rel="nooper noreferrer": Améliore la sécurité en empêchant le site cible d'accéder à la page d'origine.
    return '<a href="'.$url.'"target="_blank" rel="nooper noreferrer">'. $texte. '</a>';

} 
// echo creerLienNouvelOnglet("$url, $texte","Ouvrir dans un nouvel onglet");
echo '<a href="https://www.elanformation.fr" target="_blank" rel="noopener noreferrer">Accéder à Elan Formation</a>';