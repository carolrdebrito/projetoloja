<?php

class Pessoa{
    public $cabelo;
    public $olhos;
    public $altura;
    public $peso;
    public $nome;
    public $cor;
    public $estudar;

    function __construct($cabelo, $olhos, $altura, $peso, $nome, $cor, $estudar){
        $this->cabelo = $cabelo;
        $this->olhos = $olhos;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->nome = $nome;
        $this->cor = $cor;
        $this->estudar = $estudar;
    }

    function apresentar_pessoa(){
        echo "
            <br>A pessoa criada é:
            <br>Nome: $this->nome
            <br>Cor do cabelo: $this->cabelo
            <br>Cor dos olhos: $this->olhos
            <br>Altura: $this->altura M
            <br>Peso $this->peso KG
            <br>Cor da pele: $this->cor
        ";
    }

    function estudar(){
        echo "<br>Estou estudando ";
        echo $this->estudar;
    }


}

?>