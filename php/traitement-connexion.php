<?php
 include ('bdd.php');

    $pseudo = $_POST['pseudo_utilisateur'];
    $mdp = $_POST['pw_utilisateur'];

    $sql = "SELECT * FROM utilisateur WHERE pseudo_utilisateur = :pseudo_utilisateur"; 
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
    'pseudo_utilisateur' => $pseudo
));

$count = $requete->rowCount();

if($count == 1){

    while($resultat = $requete->fetch()) {
                $mdpbdd = $resultat['pw_utilisateur'];
            
                if (password_verify($mdp, $resultat['pw_utilisateur'])) {

                        session_start();
                        $SESSION['id'] = $resultat['id_utilisateur'];
                        $SESSION['pseudo'] = $resultat['pseudo_utilisateur'];
                        header("location:../homepage1.php?message=succes");
                
                }
                 
                else {
                
                    header("location:../connexion.php?message=error2");
                }
            
    }
           
    }else {
    header("location:../connexion.php?message=error");
        }