<?php
/**
*ecrire un script génère la valeur d'un mois en entier puis affiche son équivalence en chaine
*la valeur min=1
*max=20

*/
define("MAX",20);
define("MIN",1);
$mois = rand(MAX,MIN);
$lettre="";

if ($mois == 1) {
    $lettre =="janvier";
}
elseif($mois==2){
    $lettre="février";
}
elseif($mois==3){
    $lettre="mars";
}
elseif($mois==4){
    $lettre="Avril";
}
elseif($mois==5){
    $lettre="mai";
}
elseif($mois==6){
    $lettre="juin";
}
elseif($mois==7){
    $lettre="Juillet";
}elseif($mois==8){
    $lettre="aout";
}
elseif($mois==9){
    $lettres="septembre";
}
elseif($mois==10){
    $lettre="octobre";
}
elseif($mois==11){
    $lettre="Novembre";
}
elseif($mois==12){
    $lettre="Décembre";
}
else{
    $lettre="n'existe pas";
}
echo("le mois est $lettre");


?>