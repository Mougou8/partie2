<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <code>$capitales = ["France"=>"Paris","Allemagne"=>"berlin,<br>
    "USA"=>"Washington", "Italie"=>"Rome" ];</code><br>
    Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom<br>
    du pays s' affichera en majuscule et que le tableau est trié par ordre alphabétique <br>
    du nom de pays)grâce à une fonction personnalisée.<br>
</p>

<h2>Resultat</h2>

<!-- <table border=1>
    <!-- Entête du tableau-->
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>

    </thead>
    <!-- Corps du tableau -->
     <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
     </tbody>
</table> -->


<?php

$capitales = [
   "France" => "Paris",
   "Allemagne" => "Berlin",
   "USA" => "Washington",
   "Italie" => "Rome"
];

foreach($capitales as $pays => $capitale) {
    echo "Le pays $pays a pour capitale : $capitale<br>";
}
echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    ksort($capitales); // trier le tableau dans l'ordre  alphabétique(de A à Z) sur la clé
    $result  = "<table border=1>
                 <thead>
                     <tr>
                         <th>Pays</th>
                         <th>Capitales</th>
                     </tr>

                </thead>
    
            <tbody>";
    foreach($capitales as $pays => $capitale) {    
        $result  .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    <tr>";
    }    
    
    $result .= "</tbody></table>";
    return $result;


}



