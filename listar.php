<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM victor");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.js">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Listar Notícias</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg mb-4">
            <div class="container mt-2 d-flex p-0">
                <img class="img-logo" src="img/logo_projeto_kuririn.png" alt="Logo Projeto Kuririn" title="Projeto Kuririn">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="d-flex justify-content-end w-100">
                        <div class="menu-nav text-end">
                            <ul class="navbar-nav menu-nav">
                                <li class="nav-item links-menu pe-lg-5 me-lg-5">
                                    <a class="nav-link pe-lg-5 me-lg-5" aria-current="page" href="index.html">Ir para o Site</a>
                                </li>
                                <li class="nav-item links-menu">
                                    <a class="nav-link" href="cadastro.php">Cadastrar</a>
                                </li>
                                <li class="nav-item links-menu">
                                    <a class="nav-link active" href="#listar">Listar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <section class="container">

            <div class="row mt-5">
                <div class="col-12 m-auto mt-5">
                    <h1 class="red-border titulo-noticia mt-4">Listar Notícias</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <h3 class="dark">Data</h3>
                </div>
                <div class="col-6">
                    <h3 class="dark">Titulo</h3>
                </div>
            </div>

            <?php foreach ($lista as $noticia) : ?>
                <div class="row mb-2">
                    <div class="col-2">
                        <input type="hidden" name="id" value="<?= $noticia['id']; ?>">
                        <p><?= $noticia['data']; ?></p>
                    </div>
                    <div class="col-6">
                        <!--Titulo-->
                        <p><?= $noticia['titulo']; ?></p>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-primary w-100" href="editar.php?id=<?= $noticia['id']; ?>">Alterar</a>
                    </div>
                    <div class="col-2">
                        <a href="excluir.php?id=<?= $noticia['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')"> <button class="btn btn-danger w-100">Excluir</button></a>
                    </div>
                </div>
            <?php endforeach; ?>


        </section>


    </main>

    <footer class="container">

        <div class="fs-30 vermelho d-flex justify-content-center mt-5">
            <nav class="links-redes mt-5">
                <a href="#face"><i class="fa-brands fa-facebook-square mt-5"></i></a>
                <a href="#insta"><i class="fa-brands fa-instagram"></i></a>
                <a href="#twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="#linkedin"><i class="fa-brands fa-linkedin"></i></a>
            </nav>
        </div>

        <div class="vermelho d-flex justify-content-center my-3">
            <p>Copyright &copy;2022 Todos direitos reservados</p>
        </div>

    </footer>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/7aed4474c4.js" crossorigin="anonymous"></script>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/bootstrap.js"></script>
    <script src="scripts/popper.js"></script>

</body>

</html>