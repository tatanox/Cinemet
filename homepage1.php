<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="slider.css">
    <script src="https://kit.fontawesome.com/1a6e3a18e5.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navbar -->
    <nav class="nav1">
        <div class="nav1-container">
        <div class="nav1-logo"><a href="#" class="nav-btn-logo ">Logo</a></div>
        <div class="nav1-search"><input type="text" placeholder="Recherche . . ."></div>
    </div>
        <div class="nav1-btn-right">
        <a href="#" class="nav1-btn">Connexion</a>
        <a href="#" class="nav1-btn">Inscription</a>
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
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class=controle>
                <button onclick="carrousel1('-')">❮</button>
                <button onclick="carrousel1('')">❯</button>
        </div>
     </div>
    </section>
    <!-- section slider categorie film -->
    <section class="slider-container-type">
        <div class="slider-div">
            <div class="slider-title"><h2>Categorie</h2></div>
            <div class="slider-slider"><div class="contenu-carrousel">
            <div id="carrousel2" class="carrousel">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class=controle>
                <button onclick="carrousel2('-')">❮</button>
                <button onclick="carrousel2('')">❯</button>
        </div>
    </div>
        </div>
        <div class="slider-div">
            <div class="slider-title"><H2>Categorie</H2></div>
            <div class="slider-slider"><div class="contenu-carrousel">
            <div id="carrousel3" class="carrousel">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class=controle>
            <button onclick="carrousel3('-')">❮</button>
            <button onclick="carrousel3('')">❯</button>
        </div>
    </div>
        </div>
    </section>
   <!-- breakpoint -->
   <section class="breakpoint-container">
       <div class="breakpoint-img"></div>
       <div class="breakpoint-line"></div>
   </section>
   <!-- footer -->
    <section class="footer">
        <div class="footer-icon"><i class="fa-brands fa-facebook-f fa-3x"></i></div>
        <div class="footer-icon"><i class="fa-brands fa-instagram fa-3x"></i></div>
        <div class="footer-logo"><h2>LOGO</h2></div>
        <div class="footer-icon"><i class="fa-brands fa-twitter fa-3x"></i></div>
        <div class="footer-icon"><i class="fa-brands fa-youtube fa-3x"></i></div>
    </section>

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
    //fonction carousel 2
    var angle2 = 0;
    
    function carrousel2(sign) {
    
        spinner2 = document.getElementById("carrousel2");
    
        if (!sign) {
            angle2 = angle2 + 60
        } else {
    
            angle2 = angle2 - 60
    
        }
    
        spinner2.setAttribute("style", "transform:rotateY(" + angle2 + "deg);")
    }
    //fonction carousel 3
    var angle3 = 0;
    
    function carrousel3(sign) {
    
        spinner3 = document.getElementById("carrousel3");
    
        if (!sign) {
            angle3 = angle3 + 60
        } else {
    
            angle3 = angle3 - 60
    
        }
    
        spinner3.setAttribute("style", "transform:rotateY(" + angle3 + "deg);")
    }
    </script>
</body>
</html>