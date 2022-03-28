<?php 

include ('bdd.php');

//test bdd

$sql = "INSERT INTO utilisateur (pseudo_utilisateur, pw_utilisateur, mail_utilisateur) VALUES (:pseudo_utilisateur, :pw_utilisateur, :mail_utilisateur)";
$requete= $bdd->prepare($sql);
$requete->execute(array(
    ':pseudo_utilisateur' => 'test',
    ':pw_utilisateur' => 'test',
    ':mail_utilisateur' => 'test',
));
?>




<!--<div class="nav2">
      <ul class="links">
        <li class="signin-active"><a class="btn">Connexion</a></li>
        <?php 
        if(isset($_GET['message'])){
            if($_GET['message']=='success'){
                echo "Votres inscription a bien été prise en compte, merci de vous connecter <br><br>";
            }
            if($_GET['message']=='error'){
                echo "Le Pseudo utilisé n'existe pas <br><br>";
            }
            if($_GET['message']=='error2'){
                echo "Le Mot de passe utilisé n'est pas correcte <br><br>";
            }

        }
        ?>
        <li class="signup-inactive"><a class="btn">Inscription</a></li>
         <?php 
        if(isset($_GET['message'])){
            if($_GET['message']=='error'){
                echo "Les deux Mots de passes ne sont pas identique <br><br>";
            }
            if($_GET['message']=='error2'){
                echo "Le Pseudo est deja utilisé <br><br>";
            }
            if($_GET['message']=='error3'){
                echo "Le Mail est deja utilisé <br><br>";
            }
        }
        ?>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
				        <form class="form-signin" action="php/traitement-connexion.php" method="POST" name="form">
          
                <label for="pseudo_utilisateur mail_utilisateur">Pseudo</label>
          
                <input class="form-styling" type="text" name="pseudo_utilisateur mail_utilisateur" placeholder="Pseudo" required/>
          
                <label for="pw_utilisateur">Mot de passe</label>
          
                <input class="form-styling" type="text" name="pw_utilisateur" placeholder="Mot de passe" required/>
          
                <input type="checkbox" id="checkbox"/>
          
                <label for="checkbox" ><span class="ui"></span>Rester Connecté</label>
          
                <div class="btn-animate">
          
                <a class="btn-signin">Connexion</a>
          </div>
				        </form>
 <form class="form-signup" action="php/traitement-inscription.php" method="POST" name="form" >
          
                <label for="pseudo_utilisateur">Pseudo</label>
          
                <input class="form-styling" type="text" name="pseudo_utilisateur" placeholder="Pseudo" required>
          
                <label for="mail_utilisateur">Email</label>
          
                <input class="form-styling" type="text" name="mail_utilisateur" placeholder="Email" required>
          
                <label for="pw_utilisateur">Mot de passe</label>
          
                <input class="form-styling" type="text" name="pw_utilisateur" placeholder="Mot de passe"required>
          
                <label for="confirmpassword">Confirmer le mot de passe</label>
          
                <input class="form-styling" type="text" name="confirmpassword" placeholder="Confirmer le mot de passe"required> -->

<?php 
$sql = "SELECT * FROM utilisateur WHERE pseudo_utilisateur = :pseudo_utilisateur";
$requete= $bdd->prepare($sql);
$requete->execute();

$testpseudo = 0

while($resultat = $requete->fetch()){
    ':pseudo_utilisateur'->$pseudo //peut etre n'importe quoi 
}
if ($pseudo == $resultat[':pseudo_utilisateur']){

    $testpseudo = 1

}


?>