document.addEventListener("DOMContentLoaded", function(){
    var isClicked = false;
    document.getElementById("btn_apariencia").addEventListener("click", function(){
        if (!isClicked) {
            document.body.style.backgroundColor = "#C7C7C7";
            btn_apariencia.style.transform = "translateX(100%)";
            fondo1.style.backgroundColor = "#C7C7C7";
            isClicked = true;
        }else{
            document.body.style.backgroundColor = "#252835";
            btn_apariencia.style.transform = "translateX(0%)";
            fondo1.style.backgroundColor = "#394656";
            isClicked = false;
        }
    });
});
