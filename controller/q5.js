function clicar() {
    let metro = (document.querySelector("#metro").value);
    let resultado = parseInt(metro) * 100;
    document.querySelector("#resultado").innerHTML = resultado + " " + "centímetros";
}
