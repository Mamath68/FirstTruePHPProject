<?php

namespace Models\Managers;

use App\Manager;
use App\DAO;

class UserManager extends Manager
{

    protected $className = "Models\Entities\User";
    protected $tableName = "user";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneByEmail($data, $order = null)
    {
        $orderQuery = ($order) ?
            "ORDER BY " . $order[0] . " " . $order[1] :
            "";
        $sql = "SELECT *
        FROM " . $this->tableName . " u
        WHERE u.email = :email
        " . $orderQuery;;

        return $this->getOneOrNullResult(
            DAO::select($sql, ['email' => $data], false),
            $this->className
        );
    }

    public function updateUser($id, $data)
    {
        // Construire la requête SQL de mise à jour
        $sql = "UPDATE " . $this->tableName . " SET pseudo = :pseudo, email = :email WHERE id = :id";

        // Paramètres de la requête
        $params = array(
            'id' => $id,
            'pseudo' => $data['pseudo'],
            'email' => $data['email']
        );

        // Exécuter la requête de mise à jour
        DAO::update($sql, $params);
    }
}
