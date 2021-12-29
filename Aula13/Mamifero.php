<?php
require_once 'Animal.php';
class Mamifero extends Animalau {
    protected $corPelo;
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
}