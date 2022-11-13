function clicar() {
  let numero = document.querySelector("#numero").value;
  
  let resultado = parseInt(numero);
    document.querySelector("#resultado").innerHTML = "O número informado foi = "
        + resultado;
}
  console.log(resultado);
