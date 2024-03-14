<?php

if (App\Session::isAdmin()) {
?>
    <h1 class="p-3 text-center">Bienvenue
        <?= App\Session::getUser()->getPseudo() ?>
    </h1>
<?php

} elseif (App\Session::getUser()) {
        ?>
        <h1 class="p-3 text-center">Bienvenue
            <?= App\Session::getUser()->getPseudo() ?>
        </h1>
        <?php

} else {
?>
    <h1 class="p-3 text-center">Bienvenue cher Visiteur</h1>
<?php
}
$title = "Home";
?>