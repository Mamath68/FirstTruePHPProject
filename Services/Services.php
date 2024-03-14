<?php
// Définir le service de gestion des cartes
namespace Services;

class CardService
{
    public static function getCardsByTypeAndRace($race, $type)
    {
        // Construire l'URL de l'API avec les paramètres de type et de race
        $apiUrl = "https://db.ygoprodeck.com/api/v7/cardinfo.php?race=$race&type=$type&sort=id&num=50&offset=0";

        // Envoyer une requête GET à l'API
        $response = file_get_contents($apiUrl);

        // Vérifier si la requête a réussi
        if ($response !== false) {
            // Convertir la réponse JSON en tableau PHP
            $cards = json_decode($response, true);

            // Retourner les données des cartes
            return $cards;
        } else {
            // Gérer l'erreur si la requête échoue
            return null;
        }
    }
}
