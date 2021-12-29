<?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
    public function alimentar() {
        echo "<p>Comendo frutas.</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Ave.</p>";
    }
    public function locomover() {
        echo "<p>Voando!</p>";
    }

    public function fazerNinho() {
        echo "<p>Construindo um ninho.</p>";
    }

    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}