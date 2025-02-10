<h1>Exercice 5</h1>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en <br>
    précisant le nom des champs associés.<br>

    Exemple : 
    $nomImput = ["Nom", "Prénom", "ville"];
    afficherInmput($nomsInput);

    AFFICHAGE :
    NOM
    Prénom
    Ville
</p>

<?php

$nomInput = ["Nom"=> "Prénom"];

foreach ($nom as $prénom => $nom){
    echo "Le nom $nom a pour prénom : $prénom ";
}

   echo formulaireChamps($nomInput)


function formulaireChamps($nomInput){
    $result = "<table border = 1>
                     <thead>
                            <tr>
                                <th>$Nom</th>
                                 <th>$Prénom</th>
                                 <th>$Ville</th>
                            </tr>
                    
    
                     </thead>
                     <tbody>";
foreach ($nom as $prénom => $ville){
    $result = ."<tr>."ucfirst
}                    
    
    
    </table>"
}