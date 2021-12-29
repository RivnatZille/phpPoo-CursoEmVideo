<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - PHP - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Professor.php';
            require_once 'Tecnico.php';
            /*require_once 'Visitante.php';
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->setSexo("M");
            print_r($v1);*/
            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(15);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1->setMatricula(1112);
            $b1->setNome("Jubileu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(15);
            $b1->pagarMensalidade();
            print_r($b1);

            $p1 = new Professor();
            $p1->setNome("Carlos");
            $p1->setIdade(42);
            $p1->setSalario(2900);
            $p1->setSexo("M");
            $p1->setEspecialidade("Programação");
            $p1->receberAumento(100);
            print_r($p1);

            $t1 = new Tecnico();
            $t1->setNome("Juliana");
            $t1->setIdade(33);
            $t1->setCurso("Fotossíntese");
            $t1->praticar();
            print_r($t1);
        ?>
    </pre>
</body>
</html>