<h1 class="text-center">Les Cartes Yugioh</h1>

<div class="card-list">
    <?php if (isset($result['normal']['data'])) {
        $normal = $result['normal']['data'];
        foreach ($normal as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>" target="_blank">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['effect']['data'])) {
        $effect = $result['effect']['data'];
        foreach ($effect as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['flipEffect']['data'])) {
        $flipEffect = $result['flipEffect']['data'];
        foreach ($flipEffect as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['gemini']['data'])) {
        $gemini = $result['gemini']['data'];
        foreach ($gemini as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['normalRituel']['data'])) {
        $normalRituel = $result['normalRituel']['data'];
        foreach ($normalRituel as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['effectRituel']['data'])) {
        $effectRituel = $result['effectRituel']['data'];
        foreach ($effectRituel as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['spiritMonster']['data'])) {
        $spiritMonster = $result['spiritMonster']['data'];
        foreach ($spiritMonster as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['toon']['data'])) {
        $toon = $result['toon']['data'];
        foreach ($toon as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['union']['data'])) {
        $union = $result['union']['data'];
        foreach ($union as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['normalTuner']['data'])) {
        $normalTuner = $result['normalTuner']['data'];
        foreach ($normalTuner as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['effectTuner']['data'])) {
        $effectTuner = $result['effectTuner']['data'];
        foreach ($effectTuner as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['pendulumNormal']['data'])) {
        $pendulumNormal = $result['pendulumNormal']['data'];
        foreach ($pendulumNormal as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['pendulumEffect']['data'])) {
        $pendulumEffect = $result['pendulumEffect']['data'];
        foreach ($pendulumEffect as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['pendulumTuner']['data'])) {
        $pendulumTuner = $result['pendulumTuner']['data'];
        foreach ($pendulumTuner as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['fusion']['data'])) {
        $fusion = $result['fusion']['data'];
        foreach ($fusion as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['pendulumFusion']['data'])) {
        $pendulumFusion = $result['pendulumFusion']['data'];
        foreach ($pendulumFusion as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['synchro']['data'])) {
        $synchro = $result['synchro']['data'];
        foreach ($synchro as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['pendulumSynchro']['data'])) {
        $pendulumSynchro = $result['pendulumSynchro']['data'];
        foreach ($pendulumSynchro as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['synchroTuner']['data'])) {
        $synchroTuner = $result['synchroTuner']['data'];
        foreach ($synchroTuner as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['xyz']['data'])) {
        $xyz = $result['xyz']['data'];
        foreach ($xyz as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['pendulumXyz']['data'])) {
        $pendulumXyz = $result['pendulumXyz']['data'];
        foreach ($pendulumXyz as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['Link']['data'])) {
        $Link = $result['Link']['data'];
        foreach ($Link as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['normalSpell']['data'])) {
        $normalSpell = $result['normalSpell']['data'];
        foreach ($normalSpell as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['continuousSpell']['data'])) {
        $continuousSpell = $result['continuousSpell']['data'];
        foreach ($continuousSpell as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['ritualSpell']['data'])) {
        $ritualSpell = $result['ritualSpell']['data'];
        foreach ($ritualSpell as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['fieldSpell']['data'])) {
        $fieldSpell = $result['fieldSpell']['data'];
        foreach ($fieldSpell as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['quickSpell']['data'])) {
        $quickSpell = $result['quickSpell']['data'];
        foreach ($quickSpell as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['equipSpell']['data'])) {
        $equipSpell = $result['equipSpell']['data'];
        foreach ($equipSpell as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['normalTrap']['data'])) {
        $normalTrap = $result['normalTrap']['data'];
        foreach ($normalTrap as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['continuousTrap']['data'])) {
        $continuousTrap = $result['continuousTrap']['data'];
        foreach ($continuousTrap as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }
    ?>
    <?php if (isset($result['counterTrap']['data'])) {
        $counterTrap = $result['counterTrap']['data'];
        foreach ($counterTrap as $card) { ?>
            <div class="card-item ">
                <h3>
                    <a href="index.php?ctrl=card&action=detailCard&id=<?= $card['id'] ?>">
                        <?= $card['name'] ?>
                    </a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                <?php
                if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
                ?>
                    <h2 class="mt-2">
                        <a href="#">
                            <?= $card['race'] . ' ' . $card['type'] ?>
                        </a>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="mt-2">
                        <a href="#" target="_blank">
                            <?= $card['type'] ?>
                        </a>
                    </h2>
                <?php
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
        <h1 class="text-center">Aucune Carte disponible</h1>
    <?php
    }

    $title = "Liste des cartes";

    ?>