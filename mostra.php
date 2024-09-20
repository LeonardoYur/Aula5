<?php
session_start();

include 'produto.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
        .btn-primary {
            background-color: #0056b3;
            border: none;
        }
        .btn-primary:hover {
            background-color: #004494;
        }
        .btn-danger {
            background-color: #e74c3c;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center mb-5" style="color: #0056b3;">Produtos disponíveis</h1>
        <div class="row">
            <?php if (!empty($_SESSION['produtos'])): ?>
                <?php foreach ($_SESSION['produtos'] as $produto): ?>
                    <?php $produto = unserialize($produto)?>
                    <?php if ($produto instanceof Produto):?>
                    <div class="col-md-4 mb-4">
                        <?php $produto->exibirInformacoes();    ?>
                    </div>
                    <?php endif;?>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">Nenhum produto salvo ainda.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
