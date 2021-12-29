<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    public function emitirSom() {
        echo "<p>Bork!</p>";
    }

    function enterrarOsso() {
        echo "<p>Enterrando o osso. Não chegue perto!</p>";
    }

    function abanarRabo() {
        echo "<p>Abanando o rabo! Faça carinho nele!</p>";
    }
}