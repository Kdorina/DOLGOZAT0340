
<!-- /*
* File: szamit.php
* Author: Kovács Dorina
* Copyright: 2022, Kovács Dorina
* Group: Szoft I/N
* Date: 2022-05-26
* Github: https://github.com/Kdorina/
* Licenc: GNU GPL
*/ -->

<?php

echo file_get_contents('templates/head.html');

$page = file_get_contents('templates/szamit.html');



function Szamitas($aTengely, $bTengely){

    $terF = (4*M_PI)/3*(pow($aTengely,2)*$bTengely);
    

    return $terF;
}

    if(!empty($_GET['aTengely']) and !empty($_GET['bTengely'])) 
    {
        $aTengely = $_GET['aTengely'];
        $bTengely = $_GET['bTengely'];

        $terF= Szamitas($aTengely, $bTengely);
    }
    else{
        $terF = "HIBA!";
        }

    $terF= Szamitas($aTengely, $bTengely);

    $page= str_replace('{{eredmeny}}', $terF, $page);

    echo $page;
    echo file_get_contents('templates/foot.html');
?> 