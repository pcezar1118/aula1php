Aula 16: Com base no conteúdo sobre PHP e banco de dados MySQL. Vamos desenvolver o código SQL 
para criarmos a tabela de produtos e categoria, com base na descrição do JSON abaixo:

    "produto": {
        "nome": "Iphone",
        "descricao": "Celular 5G com 8GB RAM e câmera de 64Mp",
        "quant": 100,
        "data_alteracao": "2022-12-20",
        "valor": 2345.67,
        "largura": 250,
        "altura": 450,
        "comprimento": 2350,
        "peso": 2000,
        "fotos": [],
        "ativo": true
    }

 "categoria": {
        "nome": "Eletrônicos",
        "ativo": true
    }

    <?php
class Produto {
    public $nome;
    public $descrição;
    public $quant;
    public $data_alteracao;
    public $valor;
    public $largura;
    public $altura;
    public $comprimento;
    public $peso;
    public $fotos;
    public $ativo;

    function __construct($nome, $descrição, $quant, $data_alteracao, $largura, $altura, $comprimento, 
    $peso, $fotos, $ativo){
        $this->nome = $nome;
        $this->descricao = $descrição;
        $this->quant = $quant;
        $this->data_alteracao = $data_alteracao;
        $this->largura = $largura;
        $this->altura = $altura;
        $this->comprimento = $comprimento;
        $this->peso = $peso;
        $this->fotos = $fotos;
        $this->ativo = $ativo;
    }

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


$produto = new Produto($dadosPost["nome"], $dadosPost["descricao"], $dadosPost["quant"]);
$produto->add();

mv($produto);

//print_r($produto);
?>