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
    <title>Noticia_Blog</title>
</head>

<body>

    <header class="container p-0">
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
                                <li class="nav-item links-menu">
                                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
                                </li>
                                <li class="nav-item links-menu">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item links-menu">
                                    <a class="nav-link" href="sobre.html">Sobre</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="pb-5 mb-5">
        <section>
            <div class="container my-5 pt-3">
                <div class="row">
                    <div class="col-10 m-auto">
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </section>
        <?php foreach ($lista as $noticia) : ?>
            <section class="container">

                <div class="row">
                    <div class="col-10 m-auto">
                        <h1 class="text-center pt-5"><?= $noticia['titulo']; ?>
                        </h1>

                        <div class="d-flex justify-content-center">
                            <img class="img-blog mt-4" src="img/img_noticia_blog.jpg" alt=" paises disponobilidade regiões git sponsors">
                        </div>
                        <div class="d-flex align-items-center pt-5 pb-5">
                            <p class="data fs-16"><?= $noticia['data']; ?></p>
                            <p class="vermelho fs-16">Dashboard</p>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-10 m-auto fs-18">

                        <p class="pb-5"><?= $noticia['texto']; ?></p>
                        <hr>
                    </div>

                </div>

            </section>
        <?php endforeach; ?>
    </main>

    <footer class="container mt-5">

        <nav class="d-flex justify-content-center links-menu my-5">
            <a href="index.html">Home</a>
            <a href="blog.html">Blog</a>
            <a href="sobre.html">Sobre</a>
        </nav>

        <div class="fs-30 vermelho d-flex justify-content-center">
            <nav class="links-redes mt-3">
                <a href="#face"><i class="fa-brands fa-facebook-square"></i></a>
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