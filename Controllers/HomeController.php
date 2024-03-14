<?php

namespace Controllers;

use App\AbstractController;
use App\ControllerInterface;
use Models\Managers\UserManager;

class HomeController extends AbstractController implements ControllerInterface
{

    public function index()
    {

        return [
            "view" => VIEW_DIR . "home.php",
            "data" => null,
        ];
    }
    public function users()
    {
        $userManager = new UserManager();

        return [

            "view" => VIEW_DIR . "security/listUsers.php",

            "data" => [
                "users" => $userManager->findAll(["role", "DESC"])

            ]
        ];
    }

    public function detailUser($id)
    {

        $userManager = new UserManager();

        return [
            "view" => VIEW_DIR . "security/detailUser.php",
            "data" => [
                "user" => $userManager->findOneById($id),
            ]
        ];
    }

    public function publicUser($id)
    {
        $userManager = new UserManager();

        return [

            "view" => VIEW_DIR . "security/publicProfil.php",

            "data" => [
                "user" => $userManager->findOneById($id),
            ]
        ];
    }

    public function forumRules()
    {

        return [
            "view" => VIEW_DIR . "home/forumRules.php"
        ];
    }
    public function forumMentions()
    {
        return [
            "view" => VIEW_DIR . "home/mentions_legal.php"
        ];
    }
}
