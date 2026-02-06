<?php 

abstract class Clientes{ // Classe Pai clientes  ABSTRACT
    public string $nomeCliente;
    protected $tipo;
    
    public function __construct(string $nomeCliente)
    {
        $this->nomeCliente= $nomeCliente;
    }

    //Tipo do cliente COMUM/PREMIUM
    abstract public function desconto($valorTotal); //FUNCÃO ABSTRACT

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
    public string $nomeProduto;
    public float $preco;
    public int $quantidade;

    public function __construct( $nomeProduto, float $preco, int $quantidade) {
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
}

class Pedido{
    private $status;
    private $produto;
    private $desconto;

    public function __construct(Produto $produto){
        $this-> produto = $produto;
        $this-> desconto = 0;
        $this->status = 'pendente';
    }
    //calcula certo o desconto 
    public function aplicarDesconto($porcentagem) {
        if($this->status === 'cancelado<br>'){
            echo "Erro: Não é possivel aplicar o densconto<br>";
            return;
        }
        $this->desconto = $this->produto->preco * ($porcentagem/100);
        echo "Desconto de {$porcentagem}% aplicado.\n<br>";
    }
    //finaliza o pedido
    public function finalizar(){
        if ($this->status === 'cancelado') {
            echo "Erro: Pedido cancelado, não pode ser finalizado.\n<br>";
            return;
        }
        $precoFinal = $this->produto->preco - $this->desconto;
        $this->status= 'concluido<br>';
        echo "Pedido concluído! <br>";
        echo "Produto: {$this->produto->nomeProduto}. Preco Final: R$" . number_format($precoFinal, 2, ',', '.') . "\n<br>";
    }
    // cancela o pedido
    public function cancelar() {
        $this->status = 'cancelado<br>';
        echo "O pedido foi cancelado.\n<br>";
        return;
    }
}
//Criando array 
$estoque = [];
$estoque[1] = new Produto("Saquê", 3500, 10);
$estoque[2] = new Produto("Vodka", 500, 50);
$estoque[3] = new Produto("Cachaça", 1500, 10);
$estoque[4] = new Produto("51", 900, 50);
 
//Procurando o produto no estoque q é uma array
foreach ($estoque as $listaProduto) {
    echo "Produto: {$listaProduto->nomeProduto} || Preço: R$ {$listaProduto->preco} || Qtd: {$listaProduto->quantidade}<br>";
}

echo"<br>";
echo"<br>";

//Mostra informações de tipo e nome do cliente
$cliente1= new ClientePremium("Japa");
$cliente1->info();

$cliente2= new ClientePremium("Amaral");
$cliente2->info();

$cliente3= new ClienteComum("Max");
$cliente3->info();

$cliente4= new ClientePremium("Fernanda");
$cliente4->info();

echo"<br>";
echo"<br>";

// --- Uso do Código Pedido---

// Pega um produto da lista de produtos posição 1 do estoque
$produto1 = $estoque[1];
// Criar um pedido
$meuPedido = new Pedido($produto1);

// Calcular desconto (ex: 10%)
$meuPedido->aplicarDesconto(30);

// Concluir o pedido
$meuPedido->finalizar();

echo "<br>";
echo "<br>";

// Exemplo de pedido cancelado
$pedido2 = new Pedido($estoque[3]);
$pedido2->cancelar();



?>

