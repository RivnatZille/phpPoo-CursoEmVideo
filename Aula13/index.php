<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - PHP - POO</title>
</head>
<body>
<pre>
    <?php
        // Programa Principal
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        $c = new Cachorro();
        $c->emitirSom();

        $c->reagirFrase("Olá");
        $c->reagirFrase("Vai apanhar");
        $c->reagirHora(11,45);
        $c->reagirHora(21,00);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);
    ?>
</pre>
</body>
</html>