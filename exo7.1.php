

<!-- <form method ="post" action = "traitement.php">
    <label for="Choix 1">Choix1</label>
    <input type="checkbox" id="option1" name="option[]" value="option1">

    <label for="Choix 2">Choix 2</label>
    <input type="checkbox" id="option2" name="option2> -->



<?php


$options = ['Choix 1', 'Choix 2', 'Choix 3', ];

function genererCheckBox ($elemments){
// <form> formulaire html
echo '<form method="post" >';//action="submit.php" => à ajouter si soumission lié à echo

}
foreach ($options as $option) {
    echo '<label>';
    //htmlspecialchars = éviter tous problèmes liés aux caractères spéciaux
    echo '<input type="checkbox" name="options[]" value="' . htmlspecialchars($option) . '"> ' . htmlspecialchars($option);
    echo '</label><br>';
}
// echo '<input type="submit" value="Submit">';// pour une soumission de formulaire
echo '</form>';