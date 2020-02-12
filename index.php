<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

include"classes/personnage.php";

// Création d'une instance de la classe personnage
$perso = new personnage();
$perso->walkRight();

//echo $perso->nom;


echo $perso->x;

echo"<br><br>";



$perso2 = new personnage();
//$perso2->nom = "Robert";
//echo $perso2->nom;
$perso2->setNom("Paul");
$perso2->setNom("Marc");

echo $perso2->getNom();
echo "<br>";

$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();

$perso->walkLeft();

echo $perso->x;
echo "<br>";


$perso->walkBottom();
$perso->walkBottom();

$perso->walkTop();

echo $perso->y;