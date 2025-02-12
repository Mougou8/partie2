<h1>Exercice 14</h1>

<p>
    En utilisant les ressources de la page http://php.net/manuel/fr/book.filter.php,<br>
    vérifier si une adresse e-mail a le bon format.<br>

    Affichage<br>

    L'adresse elan@elan-formation.fr est une adrese e_mail valide<br>


    L'adresse contact@elan est une adresse e-mail invalide
</p>

<?php

function verifierEmail($email) {
    //Vérifier si l'e-mail est valide avec "FILTER_VALIDATE_EMAIL"
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "L'adresse e-mail est valide.";
    } else {
        return "L'adresse e-mail n'est pas valide.";
    }
}

// Exemple d'utilisation
$email = "exemple@domaine.com";
echo verifierEmail($email);
