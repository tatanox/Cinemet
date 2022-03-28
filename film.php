<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film: Thor Ragnarok</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/1a6e3a18e5.js" crossorigin="anonymous"></script>
</head>
<body>
     <!-- navbar -->
   <?php include('nav.php') ?>
    <!-- banner film -->
    <div class="banner1">
        <div class="banner1-title"><img src="https://triple-slider.uiinitiative.com/images/thor-ragnarok-logo.png" class="banner1-title-img"/></div>
    </div>
    <!-- zone text -->
    <section class="section-tri-text">
        <div class="div-text"><h2 class="div-text-h2">Résumé</h2>
         <p>Lorem ipsum dolor sit  amet consectetur adipisicing elit. Laborum quisquam tempore facere labore perferendis repudiandae. Esse labore debitis nisi, minus expedita quos, ex error ipsam eos possimus rem magnam iste.
         </p>
        </div>
        <div class="div-text"><h2 class="div-text-h2">Informations</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nostrum molestias quae veniam provident dolor repellat totam minima harum! Nam id mollitia eum odit tempore labore, molestias perferendis hic quia.</p>
        </div>
        <div class="div-text"><h2 class="div-text-h2">Acteurs</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quasi quas quia libero porro veritatis excepturi odit obcaecati ipsa maiores, sequi quae incidunt ab molestiae vitae tempore hic? Maiores, iure.</p>
        </div>
    </section>
    <!-- lecteur video -->
    <section class="section-lecteur">
        <iframe src="https://www.youtube.com/embed/sd_67Nql34k" frameborder="0" allowfullscreen class="lecteur-video"></iframe>
        <!-- <video src="https://www.youtube.com/watch?v=RtG6scyBIeM" class="lecteur-video"></video> -->
    </section>
    <!-- footer -->
    <section class="footer">
        <div class="footer-icon-media"><i class="fa-brands fa-facebook-f fa-2x"></i></div>
        <div class="footer-icon-media"><i class="fa-brands fa-instagram fa-2x"></i></div>
        <div class="footer-icon"><i class="fa-brands fa-facebook-f fa-3x"></i></div>
        <div class="footer-icon"><i class="fa-brands fa-instagram fa-3x"></i></div>
        <div class="footer-logo"><h2>LOGO</h2></div>
        <div class="footer-icon"><i class="fa-brands fa-twitter fa-3x"></i></div>
        <div class="footer-icon"><i class="fa-brands fa-youtube fa-3x"></i></div>
        <div class="footer-icon-media"><i class="fa-brands fa-twitter fa-2x"></i></div>
        <div class="footer-icon-media"><i class="fa-brands fa-youtube fa-2x"></i></div>
    </section>
</body> 
</html> 