function clicar() {
    let n1 = (document.getElementById("n1").value);
    let n2 = (document.getElementById("n2").value);
    let resultado = parseInt(n1) + parseInt(n2);
    document.getElementById("resultado").innerHTML = resultado;
}
console.log(resultado);















/*class Numeros {
constructor(numero) {
    this.numero = numero;
    }
    soma() {
        return this.numero + ' ' + this.numero;
    }

}

function resultado() {
let n1 = new Numeros(parseInt(x, 10));
document.querySelector("#n1");
let n2 = new Numeros(parseInt(y, 10));
document.querySelector("#n2");
    return soma();
}
console.log(soma());
*/