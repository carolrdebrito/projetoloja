<?php
require('conexao.php');

// Captando dados do formulário
$nome_produto = $_POST['nome'];
$qtd_estoque = $_POST['estoque'];
$preco = $_POST['preco'];
$fandom = $_POST['fandom'];
$caminho_imagem = $_POST['imagem'];

// Inserir dados no banco - tem que ser na mesma ordem do banco
$sql = "INSERT INTO produtos VALUES (DEFAULT, '$nome_produto', $qtd_estoque, $preco, '$fandom', '$caminho_imagem')";
$conexao->query($sql);
echo "Dados inseridos";