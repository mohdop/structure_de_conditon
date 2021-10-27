<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>

<?php
//ecrire un script   qui initialise un tableau de couleurs puis génère une table html dont le nombre de lignes est égal au nombre de couleurs.
//une ligne contient 2 cololones et a la meme couleur que celle définit dans le tableau


$tcoul=array("jaune","vert","rouge","bleu","violet");


    echo(" <table border=1>
    <tr background-color=char($tcoul[0])>
        <td>$tcoul[0]</td>
        <td width=40></td>
    </tr>
    <tr>
        <td>$tcoul[1]</td>
        <td></td>
    </tr>
    <tr>
        <td>$tcoul[2]</td>
        <td></td>
    </tr>
    <tr>
        <td>$tcoul[3]</td>
        <td></td>
    </tr>
    <tr>
        <td>$tcoul[4]</td>
        <td></td>
    </tr>
    </table>");
    


?>
</body>
</html>
