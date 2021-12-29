<?php
require_once 'Pai.php';
class Filha extends Pai {
    protected function sobrescrito() {
        echo "Filha";
    }
}