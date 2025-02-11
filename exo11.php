<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français<br>
(en toute lettres)à partir d'une chaîne de caractère représentant une date<br>

Exemple :<br>

formaterDateFr("2018-02-23");<br>

AFFICHAGE :<br>

vendredi 23 février 2018<br>

</p>

<?php
header('content-type: text/html; charset=UTF-8');

function formaterDateFr($date){

     $locale = 'fr_FR.utf-8';
     setlocale (LC_ALL,"$locale");//"French_France.utf-8"

    echo  strftime (" %d %B %Y", strtotime($date));
}
    
    echo formaterDateFr("2018-02-23");


    //  IntlDateFormatter($date){
    //     'fr-FR',
    //     IntlDateFormatter::FULL,
    //     IntlDateFormatter::FULL,
    //     'FRANCE/Paris',
    //     IntlDateFormatter::GREGORIAN
    //  };
    // echo 'Le deuxième format affiché est ' . $date->format(0);