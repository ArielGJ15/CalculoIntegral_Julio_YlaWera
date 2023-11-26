function show(str, obj) {
    document.getElementById(obj).innerHTML = str;
    //MathJax.Hub.Typeset();
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, obj]);

    
}

function show2(divID) {
    if (R1 == ("76/3")) {
    var sol = document.getElementById("sol-" + divID);
    var div = document.getElementById(divID);

    var R1 = document.getElementById('R1').value;
    var R2 = document.getElementById("R2").value;
    var R3 = document.getElementById("R3").value;
    var R4 = document.getElementById("R4").value;
    var R5 = document.getElementById("R5").value;


    

        if (sol.style.display == "none") {
            sol.style.display = "block";
        } else {
            sol.style.display = "none";
        }


        if (div.innerHTML == "Solución") {
            div.innerHTML = "Oculta solución";
        } else {
            div.innerHTML = "Solución";
        }
    }



}
