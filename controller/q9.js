function clicar() {
    let c = document.querySelector("#c").value;
    //return (5 / 9) * (f - 32);
    //return (c * 1.8) + 32;
    let resultado = parseInt((c * 1.8) + 32);
    document.querySelector("#resultado").innerHTML = resultado + "º" + " " + "farenheit";
}