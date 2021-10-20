<?php
/**
*ecrire un script génère trois nombres puis les trie dans l'ordre croissant et dans l'ordre decroissant

*/
define("MAX",100);
define("MIN",0);
$entier_1=rand(MIN,MAX);
$entier_2=rand(MIN,MAX);
$entier_3=rand(MIN,MAX);
if ($entier_1>$entier_2 and $entier_2>$entier_3){
    echo("vici l'ordre décroissant:$entier_1,$entier_2,$entier_3 <br/> ");
}
elseif ($entier_1>$entier_3 and $entier_3>$entier_2){
    echo("vici l'ordre décroissant:$entier_1,$entier_3,$entier_2 <br/>");
}
elseif ($entier_2>$entier_1 and $entier_1>$entier_3){
    echo("vici l'ordre décroissant:$entier_2,$entier_1,$entier_3 <br/>");
}
elseif ($entier_2>$entier_3 and $entier_3>$entier_1){
    echo("vici l'ordre décroissant:$entier_2,$entier_3,$entier_1 <br/>");
}
elseif ($entier_3>$entier_1 and $entier_1>$entier_2){
    echo("vici l'ordre décroissant:$entier_3,$entier_1,$entier_2 <br/>");
}
elseif ($entier_3>$entier_2 and $entier_2>$entier_1){
    echo("vici l'ordre décroissant:$entier_3,$entier_2,$entier_1 <br/>");
}



if ($entier_1<$entier_2 and $entier_2<$entier_3){
    echo("vici l'ordre croissant:$entier_1,$entier_2,$entier_3 ");
}
elseif ($entier_1<$entier_3 and $entier_3<$entier_2){
    echo("vici l'ordre croissant:$entier_1,$entier_3,$entier_2 ");
}
elseif ($entier_2<$entier_1 and $entier_1<$entier_3){
    echo("vici l'ordre croissant:$entier_2,$entier_1,$entier_3 ");
}
elseif ($entier_2<$entier_3 and $entier_3<$entier_1){
    echo("vici l'ordre croissant:$entier_2,$entier_3,$entier_1 ");
}
elseif ($entier_3<$entier_1 and $entier_1<$entier_2){
    echo("vici l'ordre croissant:$entier_3,$entier_1,$entier_2 ");
}
elseif ($entier_3<$entier_2 and $entier_2<$entier_1){
    echo("vici l'ordre croissant:$entier_3,$entier_2,$entier_1 ");
}
?>
