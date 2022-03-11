<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

  
    
    <script src="https://kit.fontawesome.com/1a6e3a18e5.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/slider.css">
<link rel="stylesheet" href="assets/css/modal.css">
<script src="assets/js/slider.js"></script>
</head>
<body>
    <!-- navbar -->
    <nav class="nav1">
        <div class="nav1-container">
        <div class="nav1-logo"><a href="homepage1.php" class="nav-btn-logo ">Logo</a></div>
        <div class="nav1-search"><input type="text" placeholder="Recherche . . ."></div>
    </div>
        <div class="nav1-btn-right">
        <a href="#films" class="nav1-btn">Films</a>
        <a href="#series" class="nav1-btn">Séries</a>
        </div>
    </nav>
    <!-- section carrousselle film selection  -->
    <section class="slider-container">
     <div class="slider">
     <div class="contenu-carrousel">
            <div id="carrousel1" class="carrousel">
                <div></div>
                <div></div>
                <div></div>
                <div> <a href="film.php" class="carrousel-link"></a> </div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class=controle>
                <button onclick="carrousel1('-')"><i class="fa-solid fa-angles-left"></i></button>
                <div class="div-modal"> 
                   <?php include('modal.php')?> 
                </div>
                <button onclick="carrousel1('')"><i class="fa-solid fa-angles-right"></i></button>
        </div>
     </div>
    </section>
    <!-- section slider categorie film -->
    <section class="slider-container-type">
        <div class="slider-div" id="films">
           <div class="slider-div-title"><div class="slider-title" ><h2>Films</h2></div></div>
            <div class="slider-slider">
                <?php include 'slider.php'?>
            </div>
        </div>
        <div class="slider-div" id="series">
            <div class="slider-div-title">
                <div class="slider-title" >
                    <h2>Séries</h2>
                </div>
            </div>
            <div class="slider-slider">
                <?php include 'slider0.php'?>
            </div>
        </div>
    </section>
   <!-- breakpoint -->
   <section class="breakpoint-container">
       <div class="breakpoint-img"><img src="https://avatars.githubusercontent.com/u/95684648?v=4" alt="mon avatar" class="breakpoint-img-in"></div>
       <div class="breakpoint-line">
           <H3>Antoine G. :</H3>
           <p> Je recommande ce site (pas parce que c'est moi qui l'ai fait)</p>
    </div>
   </section>
   <!-- footer -->
    <section class="footer">
        <div class="footer-icon"><i class="fa-brands fa-facebook-f fa-3x"></i></div>
        <div class="footer-icon"><i class="fa-brands fa-instagram fa-3x"></i></div>
        <div class="footer-logo"><h2>LOGO</h2></div>
        <div class="footer-icon"><i class="fa-brands fa-twitter fa-3x"></i></div>
        <div class="footer-icon"><i class="fa-brands fa-youtube fa-3x"></i></div>
    </section>




<script src="assets/js/modal.js"></script>
    <!-- script carousel -->
    <script>
    var angle1 = 0;

    //fonction carousel 1
    function carrousel1(sign) {

        spinner1 = document.getElementById("carrousel1");

        if (!sign) {
            angle1 = angle1 + 60
        } else {

            angle1 = angle1 - 60

        }

        spinner1.setAttribute("style", "transform:rotateY(" + angle1 + "deg);")
    }
    </script>
</body>
</html>