<h1>Exercice 5</h1>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en <br>
    précisant le nom des champs associés.<br>

    Exemple : 
    $nomImput = ["Nom", "Prénom", "ville"];
    afficherInput($nomsInput);

    AFFICHAGE :
    NOM
    Prénom
    Ville
</p>

<?php



// foreach ($nom as $prénom => $nom){
//     echo "Le nom $nom a pour prénom : $prénom ";
// }

//    echo formulaireChamps($nomInput)


function formulaireChamps($nomInput){
    
       echo'<form action="#"
        method="post">'; //Début du formulaire
 //Parcourir le tableau et créer un champs de texte pour chaque élément
    foreach ($nomInput as $nom) {
        //Affichage label
        echo '<label>'. $nom .' </label><br>';
        //Champs de texte , nom e  miniscule, required est une instruction utilisée
        //   pour iinclure un fichier externe.
        echo '<input type="text" name="'. strtolower($nom) .'"required><br><br>';
    }
        // echo '<input type="submit" value="Envoyer">';//Boutoun de soumission

        echo '<form>';//Fin de formulaire
}
 //Tableau contenant les noms des champs 

$nomInput = [
    "Nom", "Prénom","Ville"
];
formulaireChamps($nomInput);
    


