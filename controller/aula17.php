Aula 17: Com base no conteúdo sobre PHP e banco de dados MySQL. Vamos desenvolver o código SQL 
para criarmos a tabela de endereço, com base na descrição do JSON abaixo:

  "endereco":{
        "cep": "23500-000",
        "logradouro":"Rua vinte e sete",
        "bairro":"Cidade nova",
        "cidade": "Rio de janeiro",
        "uf":"RJ"
    }

    <?php
class Endereco {
    public $cep;
    public $logradouro;
    public $bairro;
    public $cidade;
    public $uf;
   
    function __construct($cep, $logradouro, $bairro, $cidade, $uf){
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        
    function add()
    {
        echo "Salvo!";
    }

    function get($id){
    }
}

    function mv($variavel){
    echo "<pre>";
    var_dump($variavel);
    echo "</pre>";
}

$dadosGet = $_GET; //envio via get
$dadosPost = $_POST; //envio via post


$endereco = new Endereco($dadosPost["cep"], $dadosPost["logradouro"], $dadosPost["bairro"]);
$endereco->add();

mv($endereco);

//print_r($endereco);
?>