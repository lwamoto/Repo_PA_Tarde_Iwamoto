<?php
abstract class Automovel{
    protected string $marca;
    protected string $nome;
    protected string $ano;
    protected string $cor;
    protected int $velocidade = 0;

    public function __construct(string $marca, string $nome, string $ano, string $cor)
    {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    abstract public function tipo(): string;

    public function andar(): void {
        $this->velocidade += 30;
        echo "{$this->nome} está andando a {$this->velocidade} km/h<br>";
    }
    
    public function freiar(): void {
        $this->velocidade = 0;
        echo "{$this->nome} freou e parou<br>";
    } 

    public function info(): void {
        echo "Marca: {$this->marca}<br>";
        echo "Nome: {$this->nome}<br>";
        echo "Ano: {$this->ano}<br>";
        echo "Cor: {$this->cor}<br>";
        echo "Tipo: {$this->tipo()}<br><br>";
    }
}

class CarroEsportivo extends Automovel{

    public function tipo(): string{
        return "Carro Esportivo";
    }

    public function andar(): void {
        $this->velocidade += 70;
        echo "{$this->nome} acelerou forte! {$this->velocidade} km/h<br>";
    }
}

$Impala = new CarroEsportivo("Chevrolet","Impala","1967","Black");
$Impala->andar();
$Impala->info();
$Impala->freiar();

echo"<br><br>";

abstract class Animal{
    protected string $especie;
    protected float $peso;
    protected string $habitat;
    protected int $velocidade = 0;

    public function __construct(string $especie, float $peso, string $habitat)
    {
        $this->especie = $especie;
        $this->peso = $peso;
        $this->habitat = $habitat;
    }

    abstract public function tipo(): string;

    public function caçar(): void {
        $this->velocidade += 20;
        echo "{$this->especie} está caçando a {$this->velocidade} km/h<br>";
    }

    public function fugir(): void {
        $this->velocidade += 25;
        echo "{$this->especie} está fugindo a {$this->velocidade} km/h<br>";
    }

    public function info(): void {
        echo "Especie: {$this->especie}<br>";
        echo "Peso: {$this->peso}<br>";
        echo "Habitat: {$this->habitat}<br>";
        echo "Tipo: {$this->tipo()}<br>";
    }
}

class Carnivoro extends Animal{
    public function tipo(): string {
        return "Carnívoro";
    }

    public function cacar(): void
    {
        $this->velocidade += 40;
        echo "{$this->especie} está caçando a {$this->velocidade} km/h<br>";
    }
}

class Herbivoro extends Animal{
    public function tipo(): string {
        return "Herbívoro";
    }
}

$onca = New Carnivoro("Onça Pintada", "70.0", "Floresta Tropical");
$onca->info();
$onca->cacar();

$girrafa = New Herbivoro("girrafa", "1930.0", "Savana");
$girrafa->info();
$girrafa->fugir();

echo"<br><br>";

abstract class Filmes{
    protected string $nome;
    protected string $ano;
    protected float $tempo;
    protected string $diretor;

    public function __construct(string $nome, string $ano, float $tempo, string $diretor)
    {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->tempo = $tempo;
        $this->diretor = $diretor;
    }

    abstract public function tipo(): string;

    public function iniciar(): void{
        echo "{$this->nome} foi iniciado, pelo diretor {$this->diretor}";
    }

    public function encerrar(): void{
        echo "{$this->nome} foi encerrado, duração em minutos {$this->tempo}";
    }

    public function info(): void{
        echo "Nome: {$this->nome}<br>";
        echo "Ano: {$this->ano}<br>";
        echo "Tempo: {$this->tempo}<br>";
        echo "Diretor: {$this->diretor}<br>";
        echo "Tipo: {$this->tipo()}<br><br>";
    }
}

class FilmeComedia extends Filmes {

    public function tipo(): string {
        return "Filme de Cómedia";
    }
}

class FilmeGuerra extends Filmes {

    public function tipo(): string {
        return "Filme de Guerra";
    }
}

$tremBala = new FilmeComedia("Trem-Bala", "4/08/2022", "127", "David Leitch");
$coraçõesFerro = new FilmeGuerra("Corações de Ferro", "15/10/2014", "135", " David Ayer");

$tremBala->iniciar();
$tremBala->info();

$coraçõesFerro->encerrar();
$coraçõesFerro->info();
?>