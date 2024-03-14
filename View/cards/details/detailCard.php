<?php
$card = $result['card']['data'];
?>

<div class="card-area">
    <div class="column1">
        <div class="card-image">
            <figure>
                <img title="<?= $card[0]['name'] ?>" loading="lazy" src="<?= $card[0]['card_images'][0]['image_url'] ?>" alt="<?= $card[0]['name'] ?>" />
            </figure>
        </div>
    </div>
    <div class="column2">
        <div class="card-name">
            <h1>
                <?= $card[0]['name'] ?>
            </h1>
        </div>
        <ul class="card-data-info">
            <?php
            if ($card[0]['type'] == 'Spell Card' || $card[0]['type'] == 'Trap Card') {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        Type
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <i class="fa-solid fa-book"></i>
                        <a href="index.php?ctrl=card&action=detailRaceType&race=<?= $card[0]['race']?>&type=<?=$card[0]['type'] ?>" target="_blank">
                            <?= $card[0]['race'] . ' ' . $card[0]['type'] ?>
                        </a>
                    </span>
                </li>
            <?php
            } else {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        Type
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <i class="fa-solid fa-book"></i>
                        <a href="#" target="_blank">
                            <?= $card[0]['type'] ?>
                        </a>
                    </span>
                </li>
                <li>
                    <span class="card-data-header text-info">
                        Typing
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <?php
                        if ($card[0]['race'] == 'Continuous') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Continuous.png" alt="Continuous" title="Continuous" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Aqua') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Aqua.png" alt="Aqua" title="Aqua" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Psychic') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Psychic.png" alt="Psychic" title="Psychic" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Beast') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Beast.png" alt="Beast" title="Beast" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Beast-Warrior') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Beast-Warrior.png" alt="Beast-Warrior" title="Beast-Warrior" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Counter') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Counter.png" alt="Counter" title="Counter" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Cyberse') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Cyberse.png" alt="Cyberse" title="Cyberse" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Dinosaur') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Dinosaur.png" alt="Dinosaur" title="Dinosaur" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Divine-Beast') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Divine-Beast.png" alt="Divine-Beast" title="Divine-Beast" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Dragon') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Dragon.png" alt="Dragon" title="Dragon" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Equip') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Equip.png" alt="Equip" title="Equip" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Fairy') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Fairy.png" alt="Fairy" title="Fairy" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Field') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Field.png" alt="Field" title="Field" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Fiend') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Fiend.png" alt="Fiend" title="Fiend" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Fish') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Fish.png" alt="Fish" title="Fish" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Illusion') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Illusion.png" alt="Illusion" title="Illusion" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Insect') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Insect.png" alt="Insect" title="Insect" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Machine') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Machine.png" alt="Machine" title="Machine" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Normal') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Normal.png" alt="Normal" title="Normal" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Plant') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Plant.png" alt="Plant" title="Plant" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Pyro') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Pyro.png" alt="Pyro" title="Pyro" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Quick-Play') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Quick-Play.png" alt="Quick-Play" title="Quick-Play" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Reptile') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Reptile.png" alt="Reptile" title="Reptile" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Ritual') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Ritual.png" alt="Ritual" title="Ritual" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Rock') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Rock.png" alt="Rock" title="Rock" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Sea Serpent') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Sea Serpent.png" alt="Sea Serpent" title="Sea Serpent" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Spellcaster') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Spellcaster.png" alt="Spellcaster" title="Spellcaster" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Thunder') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Thunder.png" alt="Thunder" title="Thunder" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Warrior') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Warrior.png" alt="Warrior" title="Warrior" loading="lazy">
                        <?php
                        } elseif ($card[0]['race'] == 'Winged Beast') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Winged Beast.png" alt="Winged Beast" title="Winged Beast" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Wyrm') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Wyrm.png" alt="Wyrm" title="Wyrm" loading="lazy" />
                        <?php
                        } elseif ($card[0]['race'] == 'Zombie') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Zombie.png" alt="Zombie" title="Zombie" loading="lazy" />
                        <?php
                        } else {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Creator-God.png" alt="Creator-God" title="Creator-God" loading="lazy" />
                        <?php
                        }
                        ?>
                        <a href="#" target="_blank">
                            <?= $card[0]['race'] ?>
                        </a>
                    </span>
                </li>
            <?php
            }
            ?>
            <?php
            if (isset($card[0]['attribute'])) {
            ?>

                <li>
                    <span class="card-data-header text-info">
                        Attribute
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <?php

                        if ($card[0]['attribute'] == 'DARK') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/DARK.jpg" alt="DARK" title="DARK" loading="lazy">

                        <?php
                        } elseif ($card[0]['attribute'] == 'LIGHT') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/LIGHT.jpg" alt="LIGHT" title="LIGHT" loading="lazy">
                        <?php
                        } elseif ($card[0]['attribute'] == 'Water') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/WATER.jpg" alt="WATER" title="WATER" loading="lazy">

                        <?php
                        } elseif ($card[0]['attribute'] == 'WIND') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/WIND.jpg" alt="WIND" title="WIND" loading="lazy">
                        <?php
                        } elseif ($card[0]['attribute'] == 'Earth') {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/EARTH.jpg" alt="EARTH" title="EARTH" loading="lazy">

                        <?php
                        } elseif ($card[0]['attribute'] == 'FIRE') {
                        ?>

                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/FIRE.jpg" alt="FIRE" title="FIRE" loading="lazy">
                        <?php
                        } else {
                        ?>
                            <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/DIVINE.jpg" alt="DIVINE" title="DIVINE" loading="lazy">

                        <?php
                        }
                        ?>
                        <a href="#" target="_blank">
                            <?= $card[0]['attribute'] ?>
                        </a>
                    </span>
                </li>
            <?php
            }
            if (isset($card[0]['level'])) {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        Level/Rank
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <img class="card-typing-icon" src="https://ygoprodeck.com/wp-content/uploads/2017/01/level.png" alt="level : <?= $card[0]['level'] ?>" title="level : <?= $card[0]['level'] ?>" loading="lazy" />
                        <a href="#" target="_blank">
                            <?= $card[0]['level'] ?>
                        </a>
                    </span>
                </li>
            <?php
            }
            if (isset($card[0]['scale'])) {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        Pendulum Scale
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <img class="card-typing-icon" src="https://www.db.yugioh-card.com/yugiohdb/external/image/parts/icon_pendulum.png" alt="scale : <?= $card[0]['scale'] ?>" title="scale : <?= $card[0]['scale'] ?>" loading="lazy" />
                        <a href="#" target="_blank">
                            <?= $card[0]['scale'] ?>
                        </a>
                    </span>
                </li>
            <?php
            }
            if (isset($card[0]['linkval'])) {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        Link Value
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <img class="card-typing-icon" src="https://ygoprodeck.com/wp-content/uploads/2017/01/level.png" alt="link : <?= $card[0]['linkval'] ?>" title="link : <?= $card[0]['linkval'] ?>" loading="lazy" />
                        <a href="#" target="_blank">
                            <?= $card[0]['linkval'] ?>
                        </a>
                    </span>
                </li>
            <?php
            }
            if (isset($card[0]['atk'])) {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        ATK
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <img class="card-typing-icon" src="public/img/swords.png" title=" attack : <?= $card[0]['atk'] ?>" alt=" attack : <?= $card[0]['atk'] ?>" />
                        <a href="#" target="_blank">
                            <?= $card[0]['atk'] ?>
                        </a>
                    </span>
                </li>
            <?php
            }
            if (isset($card[0]['def'])) {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        DEF
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <i class="fa-solid fa-shield" title="defense : <?= $card[0]['def'] ?>" alt="defense : <?= $card[0]['def'] ?>"></i>
                        <a href="#" target="_blank">
                            <?= $card[0]['def'] ?>
                        </a>
                    </span>
                </li>
            <?php
            }
            if (isset($card[0]['archetype'])) {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        Archetype
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <img class="card-typing-icon" src="public/img/roundflask.png" title=" archetype : <?= $card[0]['archetype'] ?>" alt="<?= $card[0]['archetype'] ?>" />
                        <a href="#" target="_blank">
                            <?= $card[0]['archetype'] ?>
                        </a>
                    </span>
                </li>
            <?php
            } else {
            ?>
                <li>
                    <span class="card-data-header text-info">
                        Archetype
                    </span>
                    <span class="card-data-cost card-data-subheader">
                        <img class="card-typing-icon" src="public/img/roundflask.png" alt="No Archetype" />
                        <a>
                            This Card has no Archetype
                        </a>
                    </span>
                </li>
            <?php
            }
            ?>
        </ul>
        <?php

        if (isset($card[0]['pend_desc'])) {
        ?>
            <h4>
                Pendulum Effect:
            </h4>
            <div class="card-text ">
                <?= $card[0]['pend_desc'] ?>
            </div>
            <hr>
            <h4>
                Monster Text / Monster Effect
            </h4>
            <div class="card-text ">
                <?= $card[0]['monster_desc'] ?>
            </div>
            <?php
        } else {
            if ($card[0]['type'] == 'Spell Card' || $card[0]['type'] == 'Trap Card') {
            ?>
                <h4>
                    Card Effect
                </h4>
                <div class="card-text ">
                    <?= $card[0]['desc'] ?>
                </div>
            <?php
            } else {
            ?>
                <h4>
                    Monster Text / Monster Effect
                </h4>
                <div class="card-text ">
                    <?= $card[0]['desc'] ?>
                </div>
        <?php
            }
        }
        ?>
        <hr>
    </div>
</div>
<?php
$title = $card[0]['name'];

?>