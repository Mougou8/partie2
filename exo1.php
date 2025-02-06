<h1>Exercice 1</h1>

<p>Créer une fonction permettenat de convertir en majuscule<br>
    et en rouge  un texte passé en argument<br>
</p>

<h2>Resultat</h2>

<style>
     .red {
        color : red;
     }
</style>

<?php

$texte = "Mon texte en paramètre";
$texte2 = "Mon autre texte en argument";

// afficher le résultat de la fonction convertirMajRouge
echo convertirMajRouge($texte);
echo convertirMajRouge($texte2);
echo convertirMajRouge($texte);
echo convertirMajRouge2($texte2);

echo convertirMajColor($texte, 'violet'); //on pourrait mettre le code couleur à la place de violet 

function convertirMajRouge($texte){
     $result = mb_strtoupper($texte); // convetir en majuscule
     $result = "<p class='red'>$result</p>"; // modifier la couleur en appelant la class css 'red'
     return $result; // renvoie le résultat

}
function convertirMajRouge2($texte){
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}

function convertirMajColor($texte, $color) {
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";
}



?>