<?php

namespace Controllers;

use App\AbstractController;
use App\ControllerInterface;
use Services\CardService;

class CardController extends AbstractController implements ControllerInterface
{
    public function index()
    {
        // Votre logique ici
        return [
            "view" => VIEW_DIR . "home.php",
            "data" => null,
        ];
    }

    public function getCard()
    {
        $normal = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=normal%20monster&num=1&offset=0&sort=level";
        $effect = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=effect%20monster&num=1&offset=0&sort=level";
        $flipEffect = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=flip%20effect%20monster&num=1&offset=0&sort=level";
        $gemini = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=gemini%20monster&num=1&offset=0&sort=level";
        $normalRituel = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=ritual%20monster&num=1&offset=0&sort=level";
        $effectRituel = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=ritual%20effect%20monster&num=1&offset=0&sort=level";
        $spiritMonster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spirit%20monster&num=1&offset=0&sort=level";
        $toon = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=toon%20monster&num=1&offset=0&sort=level";
        $union = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=union%20effect%20monster&num=1&offset=0&sort=level";
        $normalTuner = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=normal%20tuner%20monster&num=1&offset=0&sort=level";
        $effectTuner = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=tuner%20monster&num=1&offset=0&sort=level";
        $pendulumNormal = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20normal%20monster&num=1&offset=0&sort=level";
        $pendulumEffect = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20effect%20monster&num=1&offset=0&sort=level";
        $pendulumTuner = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20tuner%20effect%20monster&num=1&offset=0&sort=level";
        $fusion = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=fusion%20monster&num=1&offset=0&sort=level";
        $pendulumFusion = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20effect%20fusion%20monster&num=1&offset=0&sort=level";
        $synchro = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=synchro%20monster&num=1&offset=0&sort=level";
        $pendulumSynchro = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=synchro%20pendulum%20effect%20monster&num=1&offset=0&sort=level";
        $synchroTuner = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Synchro%20Tuner%20Monster&sort=level&num=1&offset=0";
        $xyz = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=xyz%20monster&num=1&offset=0&sort=level";
        $pendulumXyz = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=xyz%20pendulum%20effect%20monster&num=1&offset=0&sort=level";
        $Link = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=link%20monster&num=1&offset=0&sort=id";
        $normalSpell = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=normal&num=1&offset=0&sort=id";
        $continuousSpell = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=continuous&num=1&offset=0&sort=id";
        $ritualSpell = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=ritual&num=1&offset=0&sort=id";
        $fieldSpell = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=field&num=1&offset=0&sort=id";
        $quickSpell = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=quick-play&num=1&offset=0&sort=id";
        $equipSpell = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=equip&num=1&offset=0&sort=id";
        $normalTrap = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=normal&num=1&offset=0&sort=id";
        $continuousTrap = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=continuous&num=1&offset=0&sort=id";
        $counterTrap = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=counter&num=1&offset=0&sort=id";

        $normal = file_get_contents($normal);
        $effect = file_get_contents($effect);
        $flipEffect = file_get_contents($flipEffect);
        $gemini = file_get_contents($gemini);
        $effectRituel = file_get_contents($effectRituel);
        $normalRituel = file_get_contents($normalRituel);
        $spiritMonster = file_get_contents($spiritMonster);
        $toon = file_get_contents($toon);
        $union = file_get_contents($union);
        $normalTuner = file_get_contents($normalTuner);
        $effectTuner = file_get_contents($effectTuner);
        $pendulumNormal = file_get_contents($pendulumNormal);
        $pendulumEffect = file_get_contents($pendulumEffect);
        $pendulumTuner = file_get_contents($pendulumTuner);
        $fusion = file_get_contents($fusion);
        $pendulumFusion = file_get_contents($pendulumFusion);
        $synchro = file_get_contents($synchro);
        $pendulumSynchro = file_get_contents($pendulumSynchro);
        $synchroTuner = file_get_contents($synchroTuner);
        $xyz = file_get_contents($xyz);
        $pendulumXyz = file_get_contents($pendulumXyz);
        $Link = file_get_contents($Link);
        $normalSpell = file_get_contents($normalSpell);
        $continuousSpell = file_get_contents($continuousSpell);
        $ritualSpell = file_get_contents($ritualSpell);
        $fieldSpell = file_get_contents($fieldSpell);
        $quickSpell = file_get_contents($quickSpell);
        $equipSpell = file_get_contents($equipSpell);
        $normalTrap = file_get_contents($normalTrap);
        $continuousTrap = file_get_contents($continuousTrap);
        $counterTrap = file_get_contents($counterTrap);

        if (
            $normal &&
            $effect &&
            $flipEffect &&
            $gemini &&
            $effectRituel &&
            $normalRituel &&
            $spiritMonster &&
            $toon &&
            $union &&
            $normalTuner &&
            $effectTuner &&
            $pendulumNormal &&
            $pendulumEffect &&
            $pendulumTuner &&
            $fusion &&
            $pendulumFusion &&
            $synchro &&
            $pendulumSynchro &&
            $synchroTuner &&
            $xyz &&
            $pendulumXyz &&
            $Link &&
            $normalSpell &&
            $continuousSpell &&
            $ritualSpell &&
            $fieldSpell &&
            $quickSpell &&
            $equipSpell &&
            $normalTrap &&
            $continuousTrap &&
            $counterTrap
        ) {

            $normal = json_decode($normal, true);
            $effect = json_decode($effect, true);
            $flipEffect = json_decode($flipEffect, true);
            $gemini = json_decode($gemini, true);
            $effectRituel = json_decode($effectRituel, true);
            $normalRituel = json_decode($normalRituel, true);
            $spiritMonster = json_decode($spiritMonster, true);
            $toon = json_decode($toon, true);
            $union = json_decode($union, true);
            $normalTuner = json_decode($normalTuner, true);
            $effectTuner = json_decode($effectTuner, true);
            $pendulumNormal = json_decode($pendulumNormal, true);
            $pendulumEffect = json_decode($pendulumEffect, true);
            $pendulumTuner = json_decode($pendulumTuner, true);
            $fusion = json_decode($fusion, true);
            $pendulumFusion = json_decode($pendulumFusion, true);
            $synchro = json_decode($synchro, true);
            $pendulumSynchro = json_decode($pendulumSynchro, true);
            $synchroTuner = json_decode($synchroTuner, true);
            $xyz = json_decode($xyz, true);
            $pendulumXyz = json_decode($pendulumXyz, true);
            $Link = json_decode($Link, true);
            $normalSpell = json_decode($normalSpell, true);
            $continuousSpell = json_decode($continuousSpell, true);
            $ritualSpell = json_decode($ritualSpell, true);
            $fieldSpell = json_decode($fieldSpell, true);
            $quickSpell = json_decode($quickSpell, true);
            $equipSpell = json_decode($equipSpell, true);
            $normalTrap = json_decode($normalTrap, true);
            $continuousTrap = json_decode($continuousTrap, true);
            $counterTrap = json_decode($counterTrap, true);

            return [
                "view" => VIEW_DIR . "cards/listCards.php",
                // Monstres, Magie et Piège : Main Deck
                'normal' => $normal,
                'effect' => $effect,
                'flipEffect' => $flipEffect,
                'gemini' => $gemini,
                'effectRituel' => $effectRituel,
                'normalRituel' => $normalRituel,
                'spiritMonster' => $spiritMonster,
                'toon' => $toon,
                'union' => $union,
                'normalTuner' => $normalTuner,
                'effectTuner' => $effectTuner,
                'pendulumNormal' => $pendulumNormal,
                'pendulumEffect' => $pendulumEffect,
                'pendulumTuner' => $pendulumTuner,
                'fusion' => $fusion,
                'pendulumFusion' => $pendulumFusion,
                'synchro' => $synchro,
                'pendulumSynchro' => $pendulumSynchro,
                'synchroTuner' => $synchroTuner,
                'xyz' => $xyz,
                'pendulumXyz' => $pendulumXyz,
                'Link' => $Link,
                'normalSpell' => $normalSpell,
                // Monstre Spécial : Extra Deck
                'continuousSpell' => $continuousSpell,
                'ritualSpell' => $ritualSpell,
                'fieldSpell' => $fieldSpell,
                'quickSpell' => $quickSpell,
                'equipSpell' => $equipSpell,
                'normalTrap' => $normalTrap,
                'continuousTrap' => $continuousTrap,
                'counterTrap' => $counterTrap,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailCard($id)
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        // URL de L'API
        $card = "https://db.ygoprodeck.com/api/v7/cardinfo.php?id=$id";

        // Send GET request to the API
        $card = file_get_contents($card);

        // Handle the response
        if ($card) {
            // Convertis JSON en tableau PHP
            $card = json_decode($card, true);

            return
                [
                    "view" => VIEW_DIR . "cards/details/detailCard.php",
                    'card' => $card,
                ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailType($type)
    {
        $type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $type = "https://db.ygoprodeck.com/api/v7/cardinfo.php?type=$type&sort=level";

        // Send GET request to the API
        $type = file_get_contents($type);

        // Handle the response
        if ($type) {
            // Convert JSON response to PHP array
            $type = json_decode($type, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailType.php",
                'type' => $type,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailRace($race)
    {
        $race = filter_input(INPUT_GET, 'race', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // API endpoint URL
        $race = "https://db.ygoprodeck.com/api/v7/cardinfo.php?race=$race&sort=level";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $race = file_get_contents($race);

        // Handle the response
        if ($race) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $race = json_decode($race, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailRace.php",
                // Monstres, Magie et Piège : Main Deck
                'race' => $race,

            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailRaceType($race, $type)
    {
        // Récupérer les valeurs de race et de type depuis la requête GET
        $race = filter_input(INPUT_GET, 'race', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Appeler la méthode du service pour obtenir les cartes par type et race
        $cards = CardService::getCardsByTypeAndRace($race, $type);

        if ($cards !== null) {
            // Si des cartes sont trouvées, retourner les données à la vue
            return [
                "view" => VIEW_DIR . "cards/details/detailTypeRace.php",
                "data" => [
                    "typeRace" => $cards,
                ],
            ];
        } else {
            // Si aucune carte n'est trouvée, afficher un message d'erreur
            return [
                "view" => VIEW_DIR . "error.php",
                "data" => null,
            ];
        }
    }
    

    public function detailElement($attribute)
    {

        $attribute = filter_input(INPUT_GET, 'attribute', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // API endpoint URL

        $element = "https://db.ygoprodeck.com/api/v7/cardinfo.php?attribute=$attribute&sort=level";
        // Send GET request to the API
        $element = file_get_contents($element);


        // Handle the response
        if ($element) {
            // Convert JSON response to PHP array
            $element = json_decode($element, true);


            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailElement.php",
                'element' => $element,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }

    public function detailLevel($levelCard)
    {
        $levelCard = filter_input(INPUT_GET, 'level', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $level = "https://db.ygoprodeck.com/api/v7/cardinfo.php?level=$levelCard&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $level = file_get_contents($level);

        // Handle the response
        if ($level) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $level = json_decode($level, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailLevel.php",
                // Monstres, Magie et Piège : Main Deck
                'level' => $level,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailLinkVal($link)
    {
        $link = filter_input(INPUT_GET, 'linkval', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $linkval = "https://db.ygoprodeck.com/api/v7/cardinfo.php?link=$link&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $linkval = file_get_contents($linkval);

        // Handle the response
        if ($linkval) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $linkval = json_decode($linkval, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailLinkVal.php",
                // Monstres, Magie et Piège : Main Deck
                'linkval' => $linkval,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailScale($scale)
    {
        $scale = filter_input(INPUT_GET, 'scale', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $scale = "https://db.ygoprodeck.com/api/v7/cardinfo.php?scale=$scale&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $scale = file_get_contents($scale);

        // Handle the response
        if ($scale) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $scale = json_decode($scale, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailScale.php",
                // Monstres, Magie et Piège : Main Deck
                'scale' => $scale,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailArchetype($archetype)
    {
        // API endpoint URL

        $archetype = filter_input(INPUT_GET, 'archetype', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $archetype = "https://db.ygoprodeck.com/api/v7/cardinfo.php?archetype=$archetype&sort=type";

        // Send GET request to the API
        $archetype = file_get_contents($archetype);

        // Handle the response
        if ($archetype) {
            // Convert JSON response to PHP array
            $archetype = json_decode($archetype, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailArchetype.php",
                'archetype' => $archetype,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailAttack($atk)
    {
        // API endpoint URL

        $atk = filter_input(INPUT_GET, 'atk', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $attack = "https://db.ygoprodeck.com/api/v7/cardinfo.php?atk=$atk&sort=type";

        // Send GET request to the API
        $attack = file_get_contents($attack);

        // Handle the response
        if ($attack) {
            // Convert JSON response to PHP array
            $attack = json_decode($attack, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailAtk.php",
                'attack' => $attack,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function detailDefense($def)
    {
        // API endpoint URL

        $def = filter_input(INPUT_GET, 'def', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $def = "https://db.ygoprodeck.com/api/v7/cardinfo.php?def=$def&sort=type";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $def = file_get_contents($def);

        // Handle the response
        if ($def) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $def = json_decode($def, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailDef.php",
                // Monstres, Magie et Piège : Main Deck
                'defense' => $def,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
}
