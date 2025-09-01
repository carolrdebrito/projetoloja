<?php
    // Modelo do meu objeto
    class Garrafa{
        // Atributos (caracteristicas)
        // é publica para todo mundo
        public $cor;
        public $tipo_material;
        public $volume;
        public $tipo_liquido;

        // Método (ação) O objeto é
        function __construct($cor, $tipo_material, $volume, $tipo_liquido) {
            // __construct serve para quando é preciso formar um objeto
            $this->cor = $cor;
            $this->tipo_material = $tipo_material;
            $this->volume = $volume;
            $this->tipo_liquido = $tipo_liquido;
            // Toda vez que aparecer this, o atributo cor está sendo usado.
            // Está afirmando que o cor do public é diferente. Só entende se 
            // estiver dentro da class
            // this->cor é atributo
            // $cor é variável

        }
        // O objeto faz
        function status_tampado($tampa){
            if ($tampa == true){
                echo "Ela está tampada!";
            }
            else{
                echo "Ela está destampada!";
            }
        }
        
        function apresentar_garrafa(){
            echo "A garrafa é: <br>";
            echo "
            <br>Cor: $this->cor
            <br>Tipo de Material: $this->tipo_material
            <br>Volume: $this->volume ml
            <br>Tipo de Líquido: $this->tipo_liquido
            ";
        }

    }

    $nome = "Carolina";
    $idade = 35;
    $garrafa = new Garrafa("Azul", "Inox", 510, "Água");
    // O objeto só é montado aqui. 
    // Istanciar o objeto é pegar uma variável e receber um objeto
    $garrafa->apresentar_garrafa();
    // a setinha mostra que a variável é um objeto

    echo "<br><br>O status da garrafa é: <br>";
    echo $garrafa->status_tampado(true);

    $copo = new Garrafa("Transparente", "Vidro", 150, "Cerveja");
    echo "<br><br>";
    $copo->apresentar_garrafa();

    echo "<br><br>Cor do copo é:";
    echo $copo->cor;

?>
