<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//* exo6
// * ecrire un script qui initialise un tableau de classes le script génère des lists(ul,li) des classes par niveau

$tabc=[$L1=["herd","vito","balis"],$L2=["quag","stewie","peter"],$L3=["diana","nathan","brad"]];
foreach($tabc as $listes){
    echo("<ul>
        <li>$listes[0]</li>
        <li>$listes[1]</li>
        <li>$listes[2]</li>
    </ul>");
    
    
}
?>
    
</body>
</html>