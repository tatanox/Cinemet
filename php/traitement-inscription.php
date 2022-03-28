<?php
include ('bdd.php');


$pseudo = $_POST['pseudo_utilisateur'];
$mail = $_POST['mail_utilisateur'];
$mdp = $_POST['pw_utilisateur'];
$mdp2 = $_POST['confirmpassword'];


echo $pseudo;
die();
if($mdp == $mdp2){ 
    
$mdp = password_hash( $mdp , PASSWORD_DEFAULT);

    $sql = "SELECT * FROM utilisateur WHERE mail_utilisateur = :mail_utilisateur";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    
    $testmail = 0
    
    while($resultat = $requete->fetch()){
        ':mail_utilisateur'->$pseudo //peut etre n'importe quoi 
    
        if ($mail == $resultat[':mail_utilisateur']){
    
            $testmail = 1
    
        }
    
    }if($testmail == 0){ 

    $sql = "SELECT * FROM utilisateur WHERE pseudo_utilisateur = :pseudo_utilisateur";
    $requete= $bdd->prepare($sql);
    $requete->execute();

    $count = $requete->rowCount();

 if($count == 0){ 




$sql = "INSERT INTO utilisateur (pseudo_utilisateur, pw_utilisateur, mail_utilisateur) VALUES (:pseudo_utilisateur, :pw_utilisateur, :mail_utilisateur)";
$requete= $bdd->prepare($sql);
$requete->execute(array(
    ':pseudo_utilisateur' => $pseudo,
    ':pw_utilisateur' => $mdp,
    ':mail_utilisateur' => $mail,
));

header("location:../connexion.php?message=succes");

}else{
    header("location:../inscription.php?message=error3");
}
}else{
    header("location:../inscription.php?message=error2");
}
}else{
    header("location:../inscription.php?message=error");
}
?>