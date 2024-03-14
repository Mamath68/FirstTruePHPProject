<?php
// Récupération des données de typeRace depuis le tableau $result
$typeRace = $result['typeRace']['data'];
?>

<?php if (!empty($typeRace)) : ?>
    <div class="card-container">
        <?php foreach ($typeRace as $card) : ?>
            <div class="card-item">
                <h3><?= $card['name'] ?></h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p>Aucune carte n'a été trouvée pour cette race et ce type.</p>
<?php endif; ?>

<?php
// Définition du titre de la page
$title = "Liste des cartes";
?>