<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tous les Pokémon</title>
</head>
<body>
    <h1>Liste des Pokémon</h1>
    <div>
        <?php foreach ($pokemons as $pokemon): ?>
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px; display: inline-block;">
                <img src="<?php echo $pokemon['image']; ?>" alt="<?php echo $pokemon['name']; ?>" width="100">
                <h3><?php echo $pokemon['name']; ?></h3>
                <p>Type: <?php echo $pokemon['type']; ?></p>
                <a href="index.php?action=showOnePokemon&id=<?php echo $pokemon['id']; ?>">Voir détail</a>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>