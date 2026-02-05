<?php
require_once __DIR__ . "/../models/pokemon.php";

class PokemonController {
    private $pokemonModel;

    public function __construct() {
        $this->pokemonModel = new Pokemon();
    }

    public function showAllPokemon() {
        $pokemons = $this->pokemonModel->getAllPokemons();
        require __DIR__ . "/../views/all_pokemon.php";
    }

    public function showOnePokemon($id) {
        $pokemon = $this->pokemonModel->getPokemonById($id);
        if ($pokemon) {
            require __DIR__ . "/../views/one_pokemon.php";
        } else {
            echo "Pokémon non trouvé.";
        }
    }
}