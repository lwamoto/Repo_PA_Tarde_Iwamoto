<?php
    class Automovel{
        public $marca;
        public $cor;
        public $ano;
        public $tipo;

        public function __construct(string $marca,string $cor,string $ano,string $tipo) {
            $this->marca = $marca;
            $this->cor = $cor;
            $this->ano = $ano;
            $this->tipo = $tipo;
        }

        function carro(){
            echo "É um {$this->tipo} da marca {$this->marca}, ano {$this->ano}<br>";
            echo "<br>";
        }

        function moto(){
            echo "É uma {$this->tipo} da marca {$this->marca}, ano {$this->ano}<br>";
            echo "<br>";
        }

        function onibus(){
            echo "É um {$this->tipo} da marca {$this->marca}, ano {$this->ano}<br>";
            echo "<br>";
        }

    }

    $carro1 = new Automovel("Volvo", "White", "20/02/2010", "Carro");
    $carro1->carro();

    $moto1 = new Automovel("Kawasaki", "Green", "03/10/2024", "Moto");
    $moto1->moto();

    $onibus1 = new Automovel("Mercedes", "Orange", "30/02/2020", "Onibus");
    $onibus1->onibus();
    
    echo "<------------------------------------------------------------>";
    echo "<br>";

    class Animal{
        public $especie;
        public $peso;
        public $tamanho;
        public $perigoso;

        public function __construct(string $especie, float $peso, float $tamanho, string $perigoso){
            $this->especie= $especie;
            $this->peso= $peso;
            $this->tamanho= $tamanho;
            $this->perigoso= $perigoso;
        }

        function cachorro(){
            echo "É um {$this->especie}, pesando {$this->peso}<br>";
            echo "<br>";
        }

        function hiena(){
            echo "É uma {$this->especie}, pesando {$this->peso}<br>";
            echo "<br>";
        }

        function tatuarana(){
            echo "É uma {$this->especie}, pesando {$this->peso}<br>";
            echo "<br>";
        } 
    }

    $cachorro1 = new Animal("Cão", 50.0, 70.0, "Não");
    $cachorro1->cachorro();

    $hiena1 = new Animal("Hiena", 70.0, 110.0, "Sim");
    $hiena1->hiena();

    $tatuarana1 = new Animal("Tatuarana", 15.0, 30.0, "Sim");
    $tatuarana1->tatuarana();  

    echo "<------------------------------------------------------------>";
    echo "<br>";

    class Filme{
        public $nome;
        public $ano;
        public $tempo;
        public $produtor;

        public function __construct(string $nome, string $ano, float $tempo, string $produtor)
        {
            $this->nome = $nome;
            $this->ano = $ano;
            $this->tempo = $tempo;
            $this->produtor = $produtor;
        }

        function TremBala(){
            echo"O nome é {$this->nome}, ano {$this->ano}, produtor é {$this->produtor}<br>";
            echo"<br>";
        }

        function oExorcistadoPapa(){
            echo"O nome é {$this->nome}, ano {$this->ano}, produtor é {$this->produtor}<br>";
            echo"<br>";
        }

        function Fury(){
            echo"O nome é {$this->nome}, ano {$this->ano}, produtor é {$this->produtor}<br>";
            echo"<br>";
        }
    }

    $TremBala1 = new Filme("Trem-Bala", "04/08/2022", 127, "David Leitch");
    $TremBala1->TremBala();

    $oExorcistadoPapa1 = new Filme("A Morte do Papa", 06/04/2023, 103.0, "David Ayer");
    $oExorcistadoPapa1->oExorcistadoPapa();

    $Fury1 = new Filme("Corações de Ferro", "15/10/2014", 135, "David Ayer");
    $Fury1->Fury();  


?>