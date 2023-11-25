
function show(str, obj) {
    document.getElementById(obj).innerHTML = str;
    //MathJax.Hub.Typeset();
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, obj]);
}

function show2(divID) {

    var sol = document.getElementById("sol-" + divID);
    var div = document.getElementById(divID);

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

