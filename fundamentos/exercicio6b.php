<?php
// Funções
// Criei a função (sem parâmento), falta chamar ela
function somar(){
    $x = 5;
    $y = 10;
    $resultado = $x + $y;
    return $resultado;
    // return = a função retorna o valor - joga um valor para a função
    // somar() = 15
    // $X = somar();
    // echo = $X;
    // vai pegar o resultado e retornar como o valor da própria função
    // me permite fazer cálculos entre funções
}
// chamando a função
// como não tem parâmento, a rotina não muda. É sempre a mesma.
echo somar ();

// Função com parâmentro
function somar1 ($x, $y){
    $resultado = $x + $y;
    return $resultado;
}
// A diferença entre a sem e com parâmetro é que tem que
// colocar os numeros para que a função funcione. 
// É uma rotina que pode variar conforme os parâmetos

echo somar1(20, 5);
echo somar1(2, 7);
echo somar1(0, 71);
echo somar1(20, 5) + somar1(0, 8);

?>

