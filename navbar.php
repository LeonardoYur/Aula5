<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Loja linda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="mostra.php">Produtos cadastrados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="novo.php">Cadastrar novo produto</a>
                </li>
            </ul>
            <form class="d-flex" action="sair.php" method="POST">
                <button class="btn btn-danger" type="submit">Sair</button>
            </form>
        </div>
    </div>
</nav>