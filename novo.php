<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #0056b3;
        }
        .navbar-brand, .nav-link {
            color: white;
            font-weight: bold;
        }
        .nav-link:hover {
            color: #ddd;
        }
        .container {
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #0056b3;
            border: none;
        }
        .btn-primary:hover {
            background-color: #004494;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

    <div class="container">
        <h1 class="text-center mb-5" style="color: #0056b3;">Adicionar produto</h1>
        <form action="cria.php" method="POST" class="col-md-6 mx-auto">
            <div class="mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Nome do Produto" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="descricao" placeholder="Descrição do Produto" required></textarea>
            </div>
            <div class="mb-3">
                <input type="number" step="0.01" class="form-control" name="valor" placeholder="Valor (R$)" required>
            </div>
            <div class="mb-3">
                <input type="url" class="form-control" name="imagem" placeholder="URL da Imagem" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Adicionar produto</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
