<?php
/**
*ecrire un script génère un jour un mois et une année puis vérifie si la dette générée est valide

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
    if($jours>30){
        echo("la date n'est pas valide");
    }
    
}
if ($annee % 100 == 1 or $annee%4 == 0){
    if ($mois==2){
        $jours=29;
        if($jours>29){
            echo("la date n'est pas valide");
        }
        
    }
    elseif($mois==2){
        $jours=28;
        if($jours>28){
            echo("la date n'est pas valide");
        }
    }


}
if($mois>12){
    echo("la datte n'est pas valide");
}

echo("la date est:$jours");
echo("/");
echo("$mois");
echo("/");
echo("$annee");

?>