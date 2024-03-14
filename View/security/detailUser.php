    <div class="container py-5 bg-secondary mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="public/img/<?= App\Session::getUser()->getAvatar() ?>" alt="<?= App\Session::getUser()->getPseudo() ?>" class="img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= App\Session::getUser()->getPseudo() ?></h5>
                        <p class="text-muted mb-1">
                            <?php
                            if (App\Session::isAdmin()) {
                                echo "Bienvenue Admininistrateur";
                            } else {
                                echo "Bienvenue Internaute";
                            }
                            ?>
                        </p>
                        <!--<div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Follow</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pseudo</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= App\Session::getUser()->getPseudo() ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= App\Session::getUser()->getEmail() ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Register Date</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= App\Session::getUser()->getRegisterDate() ?></p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <div>
                                    <p class="mb-2"><span class="text-primary font-italic me-1">Options</span>
                                    </p>
                                </div>
                                <div>
                                    <p>Supprimer mon Compte</p>
                                    <a href="index.php?ctrl=user&action=deleteAccountForm&id=<?= App\Session::getUser()->getId() ?>" class="card-link btn btn-danger mb-4">Delete
                                        Account</a>
                                </div>
                                <div>
                                    <p class="mb-1">Modifier mon Compte</p>
                                    <a href="index.php?ctrl=user&action=editForm&id=<?= App\Session::getUser()->getId() ?>" class="card-link btn btn-warning">Edit Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $title = "Mon profil";
    ?>