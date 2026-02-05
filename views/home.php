<h1>Mini Pokédex</h1>

<?php if (isset($_SESSION['user'])): ?>
    <p>Bienvenue <?= $_SESSION['user'] ?></p>
    <a href="index.php?action=logout">Déconnexion</a>
<?php else: ?>
    <a href="index.php?action=login">Connexion</a><br>
    <a href="index.php?action=register">Inscription</a>
<?php endif; ?>
