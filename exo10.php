<h1>Exrcice 10</h1> 

<p>
En utilisant l'ensemble des fonctions personnalisées crées précédemment,créer un<br>
formulaire complet qui contient les informations suivantes: champs de texte un nom,<br>
prénom, adress e-mail, ville, sexe et une liste de choix parmi lesquels on pourra <br>
sélectionner un intitulé de formation :<br>
"Developpeur Logiciel", "Designer Web", "Intégrateur" ou "Chef de projet"<br>

Le formulaire devra également comporter un bouton permettant de le soumettre<br>
à un traitement de validation(submit).<br>

</p>

<?php

function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $valeur){
        // label= représente un légende pour un objet d'une interface utilisateur.
        echo "<label><input type='radio' name='sexe' value='$valeur'>$valeur</label><br>";
        echo '<form method="post" action= "submit.php">';//action="submit.php" => à ajouter si soumission lié à echo
    }
}

function formulaireChamps($nomInput){
    echo'<form action="#"
        method="post">'; //Début du formulaire
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
         $nomInput = [
        "Nom", "Prénom", "adresse e-mail","Ville", "sexe"
    ];
            formulaireChamps($nomInput);
        
    

       // Tableau avec les valeurs
       $nomsRadio =["Developpeur Logiciel", "Designer Web" ,"Intégrateur","Chef de projet"] ;

       afficherRadio($nomsRadio);
       echo '<input type="submit" value="Submit">';// pour une soumission de formulaire
       echo '</form>';
