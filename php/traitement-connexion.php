<?php
 include ('bdd.php');

    $pseudo = $_POST['pseudo_user'];
    $mdp = $_POST['password_user'];

    $sql = "SELECT * FROM users WHERE pseudo_user = :pseudo_user"; 
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
    'pseudo_user' => $pseudo
));

$count = $requete->rowCount();

if($count == 1){

    while($resultat = $requete->fetch()) {
                $mdpbdd = $resultat['password_user'];
            
                if (password_verify($mdp, $resultat['password_user'])) {

                        session_start();
                        $SESSION['id'] = $resultat['id_user'];
                        $SESSION['pseudo'] = $resultat['pseudo_user'];
                        header("location:../homepage1.php?message=succes");
                
                }
                 
                else {
                
                    header("location:../connexion.php?message=error2");
                }
            
    }
           
    }else {
    header("location:../connexion.php?message=error");
        }