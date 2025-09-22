 <!-- Baseado na loja de eletrônicos do Marcio -->
 <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cadastro de Produtos</title>
        </head>

        <body>
            <h2>Funko POP!</h2>
            <form action="inserirProduto.php" method="post">
                <p>Nome do Produto <input type="text" name="nome"></p>
                <p>Quantidade em Estoque <input type="number" name="estoque"></p>
                <p>Preço Unitário <input type="number" step="0.1" name="preco"></p>
                <p>Fandom <input type="text" name="fandom"></p>
                <p>Nome da Imagem <input type="text" name="imagem"></p>
                <input type="submit" value="Enviar" name="enviar">
            
        </body>
    </html> 