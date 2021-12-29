<?php
abstract class Pai {
    public function herdado() {
        $this->sobrescrito();
    }

    protected function sobrescrito() {
        echo "Pai";
    }
}