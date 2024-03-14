<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans dossier APP
use App\Session;
// fait appel a AbstractController dans dossier APP
use App\AbstractController;
// fait appel a ControllerInterface dans dossier APP
use App\ControllerInterface;
// fait appel a UserManager dans sous-dossier Managers du dossier Model
use Models\Managers\UserManager;

// class securityController hérite de la classe AbstractController et implémente ControllerInterface.
class UserController extends AbstractController implements ControllerInterface
{
    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
            "data" => null,
        ];
    }
    public function registerForm()
    {
        return [
            "view" => VIEW_DIR . "security/register.php",
            "data" => null,
        ];
    }
    public function register()
    {
        if (!empty($_POST)) {
            $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $avatar = filter_input(INPUT_POST, "avatar", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $confirmpassword = filter_input(INPUT_POST, "confirmpassword", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($pseudo && $password && $email) {
                if (($password == $confirmpassword) and strlen($password) >= 3) {
                    $manager = new UserManager();
                    $user = $manager->findOneByEmail($email);

                    if (!$user) {

                        $hash = password_hash($password, PASSWORD_DEFAULT);

                        if (
                            $manager->add([
                                "pseudo" => $pseudo,
                                "email" => $email,
                                "avatar" => $avatar,
                                "password" => $hash,
                                "role" => json_encode(["ROLE_USER"]),
                            ])
                        ) {
                            return [
                                "view" => VIEW_DIR . "home.php",
                            ];
                        }
                    }
                }
            } else {
                echo "<h1 style='color:red;'>Erreur d'Enregistrement !</h1>";
                return [
                    "view" => VIEW_DIR . "security/register.php",
                ];
            }
        } else {
            echo "<h1 style='color:orange;'>Ces données n'ont pas été soumis !</h1>";
            return [
                "view" => VIEW_DIR . "security/register.php",
            ];
        }
    }
    public function loginForm()
    {
        return [
            "view" => VIEW_DIR . "security/login.php",
            "data" => null,
        ];
    }
    public function login()
    {
        if (!empty($_POST)) {

            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($email && $password) {

                $manager = new UserManager();
                $user = $manager->findOneByEmail($email);

                $pass = $user->getPassword();

                if ($user) {
                    if (password_verify($password, $pass)) {
                        session::setUser($user);

                        header('Location:index.php?ctrl=user&action=index');
                    } else {
                        return [
                            "view" => VIEW_DIR . "security/login.php",
                            "data" => null,
                        ];
                    }
                }
            }
        }
    }
    public function editForm($id)
    {
        // Assurez-vous que l'utilisateur est connecté
        if (!Session::getUser()) {
            // Redirigez l'utilisateur vers la page de connexion s'il n'est pas connecté
            $this->redirectTo("user", "loginForm");
        }

        // Récupérez l'utilisateur à éditer en fonction de l'ID
        $userManager = new UserManager();
        $user = $userManager->findOneById($id);

        // Vérifiez si l'utilisateur existe
        if (!$user) {
            // Redirigez l'utilisateur vers une page d'erreur ou une autre page appropriée si l'utilisateur n'est pas trouvé
            // Vous pouvez également afficher un message d'erreur ici
            return [
                "view" => VIEW_DIR . "security/error.php", // Exemple : vue pour une erreur
                "data" => null,
            ];
        }

        // Passez les données de l'utilisateur à la vue pour afficher le formulaire d'édition
        return [
            "view" => VIEW_DIR . "security/editUser.php", // Chemin de la vue pour le formulaire d'édition
            "data" => [
                "user" => $user, // Transmettez l'utilisateur à la vue
            ],
        ];
    }
    public function edit($id)
    {
        // Vérifier que l'utilisateur est connecté
        if (!Session::getUser()) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            $this->redirectTo("user", "loginForm");
        }

        // Vérifier que l'ID de l'utilisateur à éditer est le même que celui de l'utilisateur connecté
        if (Session::getUser()->getId() != $id) {
            // Rediriger vers une page d'erreur ou une autre page appropriée si l'ID de l'utilisateur ne correspond pas
            // Vous pouvez également afficher un message d'erreur ici
            return [
                "view" => VIEW_DIR . "security/error.php", // Exemple : vue pour une erreur
                "data" => null,
            ];
        }

        // Vérifier que les données du formulaire ont été soumises
        if (!empty($_POST)) {
            $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
            $avatar = filter_input(INPUT_POST, "avatar", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Vérifier que les données nécessaires sont présentes
            if ($pseudo && $email && $avatar) {
                // Mettre à jour les données de l'utilisateur
                $userManager = new UserManager();
                $userManager->updateUser($id, [
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'avatar' => $avatar
                ]);
                // Rafraîchir les données de l'utilisateur dans la session
                $user = Session::getUser();
                $user->setPseudo($pseudo);
                $user->setEmail($email);
                $user->setAvatar($avatar);
                Session::setUser($user);
                // Rediriger vers la page de profil
                $this->redirectTo("user", "index");
            }
        }
    }


    public function logout()
    {
        unset($_SESSION['user']);
        $this->redirectTo("user", "index");
    }
    public function deleteAccountForm()
    {

        return [
            "view" => VIEW_DIR . "security/deleteAccount.php",
            "data" => null,
        ];
    }
    public function deleteAccount($id)
    {
        $userManager = new UserManager();

        if ($userManager) {
            $userManager->delete($id);
            unset($_SESSION['user']);
            $this->redirectTo("user", "index");
            return [
                "view" => VIEW_DIR . "security/deleteAccount.php",
            ];
        }
    }
}
