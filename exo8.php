<h1>Exercice 8</h1>

<p>
    Soit l'URL suivante : https://my.mobirise.com/data/userpic/764.jpg <br>
    Créer une fonction personnalisée permetant d'afficher l'image N fois à l'écran.<br>

    Exemple : <br>
    repeterImage($url, 4);<br>

    AFFICHAGE : <br>

    4 x Images<br>
</p>

<?php

function repeterImage($url, $n){
// if ($n = 0)};
//    echo "Le nombre d'images doit être supérieur à 0.";
//    return;
   // Afficher l'image N(nombre)fois
    for ($i = 0; $i < $n; $i++)
       echo '<img src="'.$url.'" alt="Image" style= "margin: 5px; width: 150px; height: auto; ">';

}
$url = "764.jpg";

echo repeterImage($url, 4);

