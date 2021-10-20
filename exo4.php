<?php
/**
*ecrire un script génère une année et un mois puis détermine et affiche le nombre de jours de ce mois dans cette année
*/
define("MAX",2100);
define("MIN",0);
define("MAXMOIS",12);
define("MINMOIS",1);
define("MINJ",1);
define("MAXJ",31);

$annee=rand(MIN,MAX);
$mois=rand(MINMOIS,MAXMOIS);
$jours=rand(MINJ,MAXJ);
if ($mois==4 or $mois==6 or $mois==9 or $mois==11){
    $jours=30;
}
if ($annee % 100 == 1 or $annee%4 == 0){
    if ($mois==2){
        $jours=29;
    }
    elseif($mois==2){
        $jours=28;
    }


}
echo("la date est:$jours");
echo("/");
echo("$mois");
echo("/");
echo("$annee");



?>
