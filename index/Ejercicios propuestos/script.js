function show(str, obj) {
    document.getElementById(obj).innerHTML = str;
    //MathJax.Hub.Typeset();
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, obj]);


}





function show2(divID) {

    var sol = document.getElementById("sol-" + divID);
    var div = document.getElementById(divID);

    var chi = document.getElementById('Chi');
    var R1 = document.getElementById('R1').value;


    if (R1 == ("76/3") || R1 == ("25.33")) {
        chi.innerHTML = "";

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
    } else {
        chi.innerHTML = "Respuesta Incorrecta";
    }
}

function show3(divID) {

    var sol = document.getElementById("sol-" + divID);
    var div = document.getElementById(divID);

    var chi2 = document.getElementById('Chi2');
    var R2 = document.getElementById("R2").value;


    if (R2 == ("ln(243)") || R2 == ("5.49")) {
        chi2.innerHTML = "";

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
    } else {
        chi2.innerHTML = "Respuesta Incorrecta";
    }
}
function show4(divID) {

    var sol = document.getElementById("sol-" + divID);
    var div = document.getElementById(divID);

    var chi3 = document.getElementById('Chi3');
    var R3 = document.getElementById("R3").value;


    if (R3 == ("49.5")) {
        chi3.innerHTML = "";

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
    } else {
        chi3.innerHTML = "Respuesta Incorrecta";
    }
}
function show5(divID) {

    var sol = document.getElementById("sol-" + divID);
    var div = document.getElementById(divID);

    var chi4 = document.getElementById('Chi4');
    var R4 = document.getElementById("R4").value;


    if (R4 == ("0")) {
        chi4.innerHTML = "";

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
    } else {
        chi4.innerHTML = "Respuesta Incorrecta";
    }
}
function show6(divID) {

    var sol = document.getElementById("sol-" + divID);
    var div = document.getElementById(divID);

    var chi5 = document.getElementById('Chi5');
    var R5 = document.getElementById("R5").value;


    if (R5 == ("20.82")) {
        chi5.innerHTML = "";

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
    } else {
        chi5.innerHTML = "Respuesta Incorrecta";
    }
}
