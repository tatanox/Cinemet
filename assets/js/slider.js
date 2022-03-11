var slide = new Array("https://triple-slider.uiinitiative.com/images/thor-ragnarok.jpg", "https://triple-slider.uiinitiative.com/images/spider-man.jpg", "https://triple-slider.uiinitiative.com/images/suicide-squad.jpg", "https://triple-slider.uiinitiative.com/images/guardians-of-the-galaxy.jpg", "https://triple-slider.uiinitiative.com/images/justice-league.jpg", "https://www.francetvinfo.fr/pictures/Lh5Ulw_NqJPTDtPmz4QvBAnqSuU/752x423/2019/04/23/php8Zaq6g.jpg", "https://images.squarespace-cdn.com/content/v1/58b3cae5d1758e0132a008c6/1635364298194-ZHU64OPJ4ZS40OOW2EH6/MHA_WHM_Concept_KeyArt_TrailerPoster-1280x720.jpg?format=2500w", "https://kinepolis.fr/sites/kinepolis.fr/files/styles/slider_16_9_960/public/stills/JJK0_Poster-Horizontal%286%29.jpg?itok=H4wzG0Z2");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}

var slide0 = new Array("https://triple-slider.uiinitiative.com/images/thor-ragnarok.jpg", "https://triple-slider.uiinitiative.com/images/spider-man.jpg", "https://triple-slider.uiinitiative.com/images/suicide-squad.jpg", "https://triple-slider.uiinitiative.com/images/guardians-of-the-galaxy.jpg", "https://triple-slider.uiinitiative.com/images/justice-league.jpg", "https://www.francetvinfo.fr/pictures/Lh5Ulw_NqJPTDtPmz4QvBAnqSuU/752x423/2019/04/23/php8Zaq6g.jpg", "https://images.squarespace-cdn.com/content/v1/58b3cae5d1758e0132a008c6/1635364298194-ZHU64OPJ4ZS40OOW2EH6/MHA_WHM_Concept_KeyArt_TrailerPoster-1280x720.jpg?format=2500w", "https://kinepolis.fr/sites/kinepolis.fr/files/styles/slider_16_9_960/public/stills/JJK0_Poster-Horizontal%286%29.jpg?itok=H4wzG0Z2");
var numero0 = 0;

function ChangeSlide0(sens0) {
    numero0 = numero0 + sens0;
    if (numero0 < 0)
        numero0 = slide0.length - 1;
    if (numero0 > slide0.length - 1)
        numero0 = 0;
    document.getElementById("slide0").src = slide0[numero0];
}