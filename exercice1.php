<?php
/**
*ecrire un script génère un nombre entier puis détermine  son signe (positif,négatif ou nul)

*/
const MAX = 100;
const MIN = -100;
$entier = rand(MIN,MAX);
if ($entier < 0) {
    echo "l'entier $entier est négatif";
}
    
elseif ($entier>0){
    echo("l'entier $entier est positif");
}
else{
    echo("l'esntier $entier est est nul");
}
   


?>