<?php
try
{
    $bdd = new PDO("mysql: host='db5006773175.hosting-data.io'; dbname=dbs5603786; charset=utf8", 'dbu2609275','6Rxm49vA'); 

}catch(PDOException $erreur)
{
    die('erreur'.$erreur->getMessage());
} 
 ?>

