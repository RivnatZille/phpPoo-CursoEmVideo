<?php
    class Monitor {
        var $fabricante;
        var $polegadas;
        var $taxa;
        var $resolucao;
        var $ultrawide;
        var $ligado;
        
        function ligar() {
            $this->ligado = true;
        }

        function desligar() {
            $this->ligado = false;
        }
    }