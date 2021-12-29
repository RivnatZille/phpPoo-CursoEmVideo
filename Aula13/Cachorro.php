<?php
require_once 'Cachorro.php';
class Cachorro extends Lobo {
    function emitirSom() {
        echo "<p>Woof! Woof! Woof!</p>";
    }

    function reagirFrase($frase) {
        if($frase == "Toma comida" || $frase == "Olá") {
            echo "<p>Abanar e Latir!</p>";
        } else {
            echo "<p>Rosnar!</p>";
        }
    }

    function reagirhora($hora, $min) {
        if($hora < 12) {
            echo "<p>Abanar!</p>";
        } elseif ($hora >= 18) {
            echo "<p>Ignorar!</p>";
        } else {
            echo "<p>Abanar e Latir!</p>";
        }
    }

    function reagirDono($dono) {
        if($dono == true) {
            echo "<p>Abanar!</p>";
        } else {
            echo "<p>Rosnar e Latir!</p>";
        }
    }

    function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar!</p>";
            } else {
                echo "<p>Latir!</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar!</p>";
            } else {
                echo "<p>Ignorar!</p>";
            }
        }
    }
}