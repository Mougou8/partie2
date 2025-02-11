<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir <br>
    une liste déroulante à partir d'un tableau de valeur.<br>

    Exemple : <br>
    $elements = ["Monsieur", "Madame", "Mademoiselle"]<br>
    AlimenterListeDeroulante<br>

    AFFICHAGE :<br>
    Monsieur<br>
    Madame<br>
    Mademoiselle<br>
</p>

<?php
//options = choisir un élément dans le paramètre
function alimenterlistederoulante ($nom, $options){
    echo "<select name='$nom'>"; // Début de la liste déroulante(pour créer = select )
    foreach ($options as $option) {
        
        echo "<option value='$option'>$option</option>"; //Ajoute chaque option
    }
    echo "</select>"; //Fin de la liste déroulante

}
//Définition des éléments(valeurs)pour la liste
$elements = ["Monsieur", "Madame", "Mademoiselle"];

//Appel de la fonction pour afficher la liste déroulante
alimenterListederoulante("civilite", $elements);

