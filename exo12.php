<h1>Exercice 12</h1>

<p>
    La fonction var_dump($variables) permet d'afficher les informations de variables<br>

    Soit le tableau suivant:<br>
    $tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]]<br>
    A l'aide d'une boucle , aficher les informations des variables contenues dans le tableau.<br>

    AFFICHAGE:<br>

    bool (true)<br>
    string (5) "texte"<br>
    int(10)<br>
    float (25.369)<br>
    array(2) { [0]=> string(7) "valeur1" [1]=> string (7)"valeur2"}<br>

</p>

<?php

 $tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];
      foreach ($tableauValeurs as $valeur){

        var_dump ($valeur);
    } 
    
    echo "<br>";

    // bool (true)
    // string (5) "texte"
    // int(10)
    // float (25.369)
    // array(2) { [0]=> string(7) "valeur1" [1]=> string (7)"valeur2"}  
