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
    </div>
    <a href="index.php?action=showAllPokemon">Retour à la liste</a>
</body>
</html>