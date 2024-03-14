<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/f0dc5fab26.js" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/CSS/smartphone.css">
    <link rel="stylesheet" href="public/CSS/tablette.css">
    <link rel="shortcut icon" href="public/img/favico.png" type="image/x-icon">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <div>
        <header>
            <nav class="navbar bg-secondary navbar-expand-lg">
                <div class="container d-flex justify-content-center align-items-end">
                    <a class="navbar-brand" href="index.php?ctrl=home&action=index">My First PHP App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My First PHP App</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php?ctrl=home&action=index">Home</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Jeu de cartes
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?ctrl=card&action=getCard">Liste des Cartes</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        L'univers Yu-Gi-Oh!
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <?php
                                if (App\Session::getUser()) { ?>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= App\Session::getUser()->getPseudo() ?>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.php?ctrl=home&action=detailUser">Profile</a></li>
                                            <li><a class="dropdown-item" href="index.php?ctrl=user&action=logout">Logout</a></li>
                                        </ul>
                                    </div>
                                    .
                                <?php } else { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Connectique
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.php?ctrl=user&action=loginForm">Login</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="index.php?ctrl=user&action=registerForm">Register</a></li>
                                        </ul>
                                    </li>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container">
            <?= $contenu ?>
        </main>

        <footer class="text-center text-white" style="background-color: #0a4275;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">
                            <a class="btn btn-primary btn-rounded" href="index.php?ctrl=home&action=forumRules" target="_blank">Règlement du forum</a>
                        </span>
                        <span class="me-3">
                            <a class="btn btn-primary btn-rounded" href="index.php?ctrl=home&action=forumMentions" target="_blank">Mentions légales</a>
                            </>
                    </p>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2024 Copyright:
                <p class="text-white">Mathieu Stamm</p>
            </div>
        </footer>

        <script src="public/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>