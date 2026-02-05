<h2>Connexion</h2>

<?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button>Connexion</button>
</form>

<a href="index.php?action=register">Créer un compte</a>
