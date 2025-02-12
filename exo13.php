<h1>Exercice 13</h1>

<p>
    Comme nous l'avons vu à l'exercice précédent, les var_dump() vont nous servir<br>
    à débugger. Mais l'affichage peut-être un peu chaotique. Afin d'améliorer<br>
    nous allons utiliser un outil pratique: xdebug.
</p>

<?php

$array = ["texte1", "texte2", "texte3",1000,100.5,true,["texte4" ,"texte5"]];
var_dump($array);