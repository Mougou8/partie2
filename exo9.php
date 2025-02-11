<h1>Exercice 9</h1> 

<p>
    Créer une fonction personnalisée permettant d'afficher des boutons radio<br>
    avec un tableau de valeurs en paramètre("Monsieur" "Madame", "Mademoiselle")<br>

    Exemple : <br>
    afficherRadio($nomsRadio);<br>

    AFFICHAGE <br>
    O Masculin<br>
    O Féminin<br>
    O Autre<br>

</p>

<?php

function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $valeur){
        // label= représente un légende pour un objet d'une interface utilisateur.
        echo "<label><input type='radio' name='genre' value='$valeur'>$valeur</label><br>";

    }
}
       // Tableau avec les valeurs
       $nomsRadio =["Masculin", "Féminin" ,"Autre"] ;

       afficherRadio($nomsRadio);