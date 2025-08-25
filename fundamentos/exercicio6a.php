<?php
// "Banco de Dados"
$produtos = [ //lista criada
    [ //para cada produto
        "Nome" => "Shampoo",
        "Marca" => "L'Oréal",
        "Preço" => 18.00
    ],
    [
        "Nome" => "Condicionador",
        "Marca" => "L'Oréal",
        "Preço" => 21.50
    ],
    [
        "Nome" => "Creme para Pentear",
        "Marca" => "Salon Line",
        "Preço" => 34.50
    ],
    [
        "Nome" => "Leave-In",
        "Marca" => "Itallian",
        "Preço" => 14.90
    ] // fica sem virgula pq é o final
    ];

foreach ($produtos as $produtos){ // loop que repete enquanto 
    // tiver dados no banco
    echo '
        <div>
            <h2>' . $produtos["Nome"] . '</h2>
            <p style="font-style: italic;">' . $produtos["Marca"] . '</p>
            <p>R$' . $produtos["Preço"] . '</p>
            <button>Comprar</button>
        </div>
    ';

}

?>

