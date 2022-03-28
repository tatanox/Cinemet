   <!-- navbar -->
   <nav class="nav1">
        <div class="nav1-container">
        <div class="nav1-logo"><a href="homepage1.php" class="nav-btn-logo ">Logo</a></div>
            <?php if(isset($_SESSION['pseudo'])) {  ?>
        <a href="homepage1.php" class="nav1-btn">Bonjour,<?php echo $_SESSION['pseudo']; ?></a>
        <a href="php/traitement-deco.php" class="nav1-btn">Deconnexion</a>
            <?php } ?>
        <div class="nav1-search"><input type="text" placeholder="Recherche . . ."></div>
    </div>
        <div class="nav1-btn-right">
        
        <a href="#films" class="nav1-btn">Films</a>
        <a href="#series" class="nav1-btn">Séries</a>
        <div class="nav1-burger"><i class="fa-solid fa-bars"></i></div>
        </div>
    </nav>