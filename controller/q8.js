/*function clicar() {
    let farenheit = document.querySelector("#farenheit").value;
    let resultado = parseFloat(farenheit) * 100;
    document.querySelector("#resultado").innerHTML = resultado + " " + "celsius";
}*/

function clicar() {
    let f = document.querySelector("#f").value;
    //return (5 / 9) * (f - 32);
    let resultado = parseInt((5 / 9) * (f - 32));
    document.querySelector("#resultado").innerHTML = resultado + "º" + " " + "celsius";
}