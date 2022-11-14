function clicar() {
    let n1 = (document.querySelector("#n1").value);
    let n2 = (document.querySelector("#n2").value);
    let n3 = (document.querySelector("#n3").value);
    let resultado = (parseInt(n1) + parseInt(n2) + parseInt(n3)) / 3;
    document.querySelector("#resultado").innerHTML = "A média do aluno é:" + " " + resultado;
}
