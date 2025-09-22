<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Produtos</title>
    </head>
    <body>

        <h2>Funko POP!</h2>
        <form action="inserirProduto.php" method="POST">
            <label for="nome">Nome do produto:</label><br>
            <input type="text" name="nome" id="nome" required><br><br>

            <label for="qtdProdutos">Quantidade produtos:</label><br>
            <input type="number" id="qtdProdutos" name="qtdProdutos" required><br><br>

            <label for="preco">Preço unitário:</label><br>
            <input id="text" name="preco" required><br><br>

            <input type="submit" value="Cadastrar">
        </form>

    </body>
    </html>