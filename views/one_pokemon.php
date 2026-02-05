<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail du Pokémon</title>
</head>
<body>
    <h1>Détail du Pokémon</h1>
    <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
        <img src="<?php echo $pokemon['image']; ?>" alt="<?php echo $pokemon['name']; ?>" width="200">
        <h2><?php echo $pokemon['name']; ?></h2>
        <p><strong>ID:</strong> <?php echo $pokemon['id']; ?></p>
        <p><strong>Type:</strong> <?php echo $pokemon['type']; ?></p>
        <?php if (!empty($pokemon['evolutions'])): ?>
            <h3>Évolutions</h3>
            <div>
                <?php foreach ($pokemon['evolutions'] as $evolution): ?>
                    <div style="display: inline-block; margin: 10px; text-align: center;">
                        <img src="<?php echo $evolution['image']; ?>" alt="<?php echo $evolution['name']; ?>" width="100">
                        <p><?php echo $evolution['name']; ?></p>
                        <a href="index.php?action=showOnePokemon&id=<?php echo $evolution['id']; ?>">Voir détail</a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <a href="index.php?action=showAllPokemon">Retour à la liste</a>
</body>
</html>