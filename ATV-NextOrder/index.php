<?php 

abstract class Clientes{ // Classe Pai clientes
    protected string $nomeCliente;
    protected $tipo;
    protected $status;
    
    public function __construct(string $nomeCliente)
    {
        $this->nomeCliente= $nomeCliente;
    }

    //Tipo do cliente COMUM/PREMIUM
    abstract public function desconto($valorTotal);

    public function getNome() {
        return $this->nomeCliente;
    }

    //AQ MOSTRA AS INFORMAÇÕES DO CLIENTE, NOME E TIPO 
    public function info(): void {
        echo "Nome: {$this->nomeCliente}<br>";
        echo "Tipo: {$this->tipo}<br><br>";
    }
}

class ClienteComum extends Clientes{
    public function __construct($nome) {
        parent::__construct($nome);
        $this->tipo = "Comum";
    }

    public function desconto($valorTotal) {
        return 0; // Sem desconto
    }
}


class ClientePremium extends Clientes{
    public function __construct($nome) {
        parent::__construct($nome);
        $this->tipo = "Premium";
    }

    public function desconto($valorTotal) {
        return $valorTotal * 0.30; // 30% de desconto
    }
}


class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
    
}

//Procurando o produto
foreach ($estoque as $produto) {
    echo "Produto: {$produto->nome} || Preço: R$ {$produto->preco} || Qtd: {$produto->quantidade}<br>";
}


$cliente1= new ClientePremium("Japa");
$cliente1->info();

$cliente2= new ClientePremium("Amaral");
$cliente2->info();

$cliente3= new ClientePremium("Max");
$cliente3->info();

$cliente4= new ClientePremium("Fernanda");
$cliente4->info();

//Criando array 
$estoque = [];
$estoque[1] = new Produto("Saquê", 3500.0, 10);
$estoque[2] = new Produto("Vodka", 50.00, 50);
$estoque[3] = new Produto("Cachaça", 3500.0, 10);
$estoque[4] = new Produto("51", 50.00, 50);

class Pedido{
    public staus
}


?>

