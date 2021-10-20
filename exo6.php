<?php
/**
*ecrire un script génère un jour,un mois et une année puis détermine et affiche la datte suivate et celle précédente

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
$nvj=$jours ;
$nvm=$mois;
$nva=$annee;
$acj=$jours;
$acm=$mois;
$aca=$annee;

if ($mois==4 or $mois==6 or $mois==9 or $mois==11){

    if ($jours==1){
        $acj=31;
        $acm=$mois-1;
        $aca=$annee;
    }
    elseif($jours!=1){
        $acj=$jours-1;
        $acm=$mois;
        $aca=$annee;
    }    
}
if ($jours==1){
    $acj=30;
    $acm=$mois-1;
    $aca=$annee;
     
}elseif($jours!=1){
    $acj=$jours-1;
    $acm=$mois;
    $aca=$annee;
}


if ($jours==31){
    $nvj=1;
    $nvm=$mois+1;
    $nva=$annee ;
}
elseif ($jours!=31){
    $nvj=$jours+1;
    $nvm=$mois;
    $nva=$annee;
}
if ($mois==4 or $mois==6 or $mois==9 or $mois==11){
    $jours=30;
    if ($jours!=30){
        $nvj=$nvj+1;
        $nvm=$mois; 
        $nva=$annee;
    }
    elseif ($jours==30){
        $nvj=1;
        $nvm=$nvm+1; 
        $nva=$annee;
              
    }
    
}
if( $mois==1 and $jours==1){
    $acj=31;
    $acm=12;
    $aca=$annee-1;
}

if ($annee % 100 == 1 or $annee%4 == 1){
    if ($mois==2){
        $jours=29;
        if ($jours==29){
            $nvj=1;
            $nvm=$mois+1;
            $nva=$annee;
        }
        elseif($jours!=29){
            $nvj=$jours+1;
            $nvm=$mois;
            $nva=$annee;
        }

    }
    elseif($mois==2){
        $jours=28;
        if ($jours!=28){
            $nvj=$jours+1;
            $nvm=$mois;
            $nva=$annee;
            
        }
        elseif ($jours==28){
            $nvj=1;
            $nvm=$mois+1;
            $nva=$annee;
            
        }
    }
}
if($mois==12 and $jours==31){
    $nva=1;
    $nvj=1;
    $nvm=1;
}

echo("la date est:$jours");
echo("/");
echo("$mois");
echo("/");
echo("$annee <br>");
echo("la datte suivante est: $nvj");
echo("/");
echo(" $nvm");
echo("/");
echo("$nva <br>");
echo("la datte précédente est: $acj / $acm / $aca ")
?>