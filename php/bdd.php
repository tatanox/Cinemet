<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_cinema;charset=utf8', 'root','root'); 

}catch(PDOException $erreur)
{
    die('erreur'.$erreur->getMessage());
} 
 ?>

