<?php
require_once __DIR__ . "/../models/user.php";

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = $_POST['password'];

            if ($this->userModel->getByUsername($username)) {
                echo "Ce nom d'utilisateur existe déjà !";
                return;
            }

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $this->userModel->create($username, $passwordHash);

            echo "Inscription réussie !";
            header("Location: index.php?action=login");
            exit;
        }

        require __DIR__ . "/../views/register.php"; // appelle le formulaire
    }public function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        $user = $this->userModel->getByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect !";
        }
    }

    require __DIR__ . "/../views/login.php"; // appelle le formulaire
}

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php");
        exit;
    }
}
