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