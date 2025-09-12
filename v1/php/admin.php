<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Funko Pop! Brasil</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/coroa.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/estilofunko.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Funko Pop! Brasil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sobre</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Todos os Produtos</a></li>
                                <li><hr class="dropdown-divider"/></li>
                                <li><a class="dropdown-item" href="#!">Itens Populares</a></li>
                                <li><a class="dropdown-item" href="#!">Categorias</a></li>
                                <li><a class="dropdown-item" href="#!">Outlet</a></li>
                            </ul>
                        </li>
                        <!-- apagar <li class="nav-item"><a class="nav-link" href="#!">Login</a></li> -->
                    </ul>
                    <form class="d-flex">
                        <?php
                            session_start();
                            // echo "<span style= color: 'white';>" . $_Session['nome'] . "</span>;
                            // Para trocar a cor da letra
                            echo $_SESSION['nome']; // Mostra o nome do usuário
                        ?>
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrinho
                            <span class="badge bg-dark text-white ms-3 rounded-pill">0</span>
                        </button>
                    </form>
                    <!-- Botão de busca
                    <form role="search" class="ms-3"> 
                        <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">  -->
                    </form>
                </div>
            </div>
        </nav>
    </body>
</html>