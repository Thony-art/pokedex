<?php
require_once "controllers/UserController.php";
require_once "controllers/PokemonController.php";

$action = $_GET['action'] ?? '';

switch($action) {
    case 'register':
        $controller = new UserController();
        $controller->register();
        break;
    case 'login':
        $controller = new UserController();
        $controller->login();
        break;
    case 'logout':
        $controller = new UserController();
        $controller->logout();
        break;
    case 'showAllPokemon':
        $controller = new PokemonController();
        $controller->showAllPokemon();
        break;
    case 'showOnePokemon':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $controller = new PokemonController();
            $controller->showOnePokemon($id);
        } else {
            echo "ID manquant.";
        }
        break;
    default:
        session_start();
        echo "<h1>Mini Pokédex</h1>";
        if (isset($_SESSION['username'])) {
            echo "Bienvenue " . $_SESSION['username'] . "<br>";
            echo '<a href="index.php?action=logout">Déconnexion</a><br>';
        } else {
            echo '<a href="index.php?action=login">Connexion</a> | ';
            echo '<a href="index.php?action=register">Inscription</a><br>';
        }
        echo '<a href="index.php?action=showAllPokemon">Voir tous les Pokémon</a>';
        break;
}
