<section style="background-color: #eee;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modification du profile de <?= App\Session::getUser()->getPseudo() ?></p>

                                <form action="index.php?ctrl=user&action=edit&id=<?= App\Session::getUser()->getId() ?>" method="post" enctype="multipart" class="mx-1 mx-md-4">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg mb-4 me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="pseudo" id="pseudo" placeholder="Enter your Pseudo" class="form-control" value="<?= App\Session::getUser()->getPseudo() ?>" />
                                            <label class="form-label" for="pseudo">Your Pseudo</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg mb-4 me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" placeholder="Enter your Email" id="email" class="form-control" value="<?= App\Session::getUser()->getEmail() ?>" />
                                            <label class="form-label" for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa-regular fa-image fa-lg mb-4 me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="file" name="avatar" placeholder="Enter your avatar" id="avatar" class="form-control" value="<?= App\Session::getUser()->getAvatar() ?>" />
                                            <label class="form-label" for="avatar">Your Avatar</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg mb-4 me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="password" name="password" placeholder="Enter your Password" class="form-control" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg mb-4 me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="confirm_password" name="confirmpassword" placeholder="Repeat your password" class="form-control" />
                                            <label class="form-label" for="confirm_password">Repeat your password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Update" />
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="././public/img/fanart.jpg" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$title = "Update Account"
?>