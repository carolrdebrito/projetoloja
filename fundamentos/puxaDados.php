<?php
//Conexão com o Banco de Dados
$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "senac";

$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);


//Executar o comando para listar
$listar = "SELECT * FROM alunos";
$listarexec = $conexao->query($listar);

if($listarexec->num_rows > 0){
    echo "<table>";
    echo "
        <tr>
            <th>Nome</th>
            <th>Curso</th>
        </tr>
    ";
    // th-> tipo de titulo da tabela td-> table data tr-> linha da tabela
    while($linha = $listarexec->fetch_assoc()){ // busca associativa
       // echo "<br>" . $linha["nome"] . " | " . $linha["curso"];
       echo "<tr><td>" . $linha["nome"] . "</td>";
       echo "<td>" . $linha["curso"] . "</td></tr>";
    }
    echo "</table>";
} else  {
    echo "<br>Dados não encontrados";
}

?>