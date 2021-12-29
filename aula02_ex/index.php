<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Aula 02 - PHP POO</title>
</head>
<body>
    <?php
        require_once 'objetos.php';

        $monitor1 = new Monitor;
        $monitor1->fabricante = "LG";
        $monitor1->polegadas = 34;
        $monitor1->taxa = 144;
        $monitor1->resolucao = "2560x1080";
        $monitor1->ultrawide = true;
        $monitor1->ligar();
        var_dump($monitor1);

        $monitor2 = new Monitor;
        $monitor2->fabricante = "Acer";
        $monitor2->polegadas = 27;
        $monitor2->taxa = 210;
        $monitor2->resolucao = "2560x1440";
        $monitor2->ultrawide = false;
        $monitor2->desligar();
        var_dump($monitor2);
    ?>
</body>
</html>