<?php

include ('bdd.php');

$pseudo = $_POST['pseudo_user'];
$mail = $_POST['mail_user'];
$mdp = $_POST['password_user'];
$mdp2 = $_POST['confirmpassword'];




if($mdp == $mdp2){ 
    
    $mdp = password_hash( $mdp , PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE mail_user = :mail_user";
    $requete = $bdd->prepare($sql);
    $requete->execute(array(
        ':mail_user' => $mail
    ));
    $testmail = 0;
    
    while($resultat = $requete->fetch()){
    
    
        
        
        if ($mail == $resultat['mail_user']){
    
            $testmail = 1;
    
        }
    
    }
    
    if($testmail == 0){ 

    $sql = "SELECT * FROM utilisateur WHERE pseudo_user = :pseudo_user";
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
        ':pseudo_user' => $pseudo
      
    ));
    $count = $requete->rowCount();

                                            
    
                        if($count == 0){ 




                                                $sql = "INSERT INTO users (pseudo_user, password_user, mail_user) VALUES (:pseudo_user, :password_user, :mail_user)";
                                                $requete= $bdd->prepare($sql);
                                                $requete->execute(array(
                                                    ':pseudo_user' => $pseudo,
                                                    ':password_user' => $mdp,
                                                    ':mail_user' => $mail
                                                ));

                                                header("location:../connexion.php?message=succes");

                                            }
                                            else{
                                                header("location:../inscription.php?message=error3");
                                            }}
     else{
            header("location:../inscription.php?message=error2");
     }}

else{
    header("location:../inscription.php?message=error");
}
?> 