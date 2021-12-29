<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;
    public function alimentar() {
        echo "<p>Mamando.</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamífero.</p>";
    }

    public function locomover() {
        echo "<p>Correndo!</p>";
    }

    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}