<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer <br>
   des cases à cocher. On pourra préciser dans le tableau <br>
   associatif si la case est coché ou non.<br>

   Exemple :
   genererCheckbox($elements);<br>
// où $elements est un tableau associatif clé => valeur<br> 
avec 3 entrées<br>

AFFICHAGE :<br>

   Choix 1<br>
   Choix 2<br>
   Choix 3<br>
</p>



<?php

// $html = ["Choix 1", "Choix 2", "Choix 3"];

// function genererCheckBox ($elements) {
   // $html = " " ;

   // foreach ( $elements as $cle => $valeur );
   //     $checked = $valeur ? 'checked': "true" ;// ajoute checked est true

      //  $html .="<label><input = type ='checkbox' name ='{$cle}' {cheked}>{cle}<:label><br>";
     
// };
   // return $html;

   // $elements = [
   //    "Choix 1" => true,
   //    "Choix 2" => false,
   //    "Choix 3" => true
   // ];
   // echo genererCheckBox($elements);
   
   
   function genererCheckBox ($elemments){
      echo "<select name='$elements'>"; // Début de la liste déroulante(pour créer = select )
      foreach ($elements as $cle => $valeur) {
          
          echo "<valeur value='$valeur'>$valeur</valeur>"; //Ajoute chaque option
      }
      echo "</select>"; //Fin de la liste déroulante
  
  }
  //Définition des éléments(valeurs)pour la liste
  $elements = ["Choix 1", "Choix 2", "Choix 3"];
  
  //Appel de la fonction pour afficher la liste déroulante
  genererCheckBox( $elements);
  