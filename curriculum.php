<?php
session_start();
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/curriculum.css" />
    <title>Currículo</title>
</head>

<body>
        <h1> <?php echo $_SESSION['nome'] ?> </h1>
        </br>
        <img src="<?php echo $_SESSION['dir'] . "/" . $_SESSION['nome_arq'] ?>" alt='imagem' />
        <h4><?php echo $_SESSION['array_dados_pessoais']['nome'] . ', ' .   $_SESSION['array_dados_pessoais']['estado_civil'] . ', ' .  $_SESSION['array_dados_pessoais']['idade'] . ' anos.' ?></h3>
            <h4><?php
                echo $_SESSION['array_dados_pessoais']['rua'] . ', ' . $_SESSION['array_dados_pessoais']['numero']  . ', ' . $_SESSION['array_dados_pessoais']['complemento'] . ' - ' .  $_SESSION['array_dados_pessoais']['bairro'] . ' - ' . $_SESSION['array_dados_pessoais']['estado'] ?></h3></br>
                <h4>Telefone: <?php echo $_SESSION['array_dados_pessoais']['telefone'] ?></h4></br>
                <h4>E-mail: <?php echo $_SESSION['array_dados_pessoais']['email'] ?></h4> </br>
                <strong>
                    <h2>OBJETIVO</h2>
                </strong>
                <ul>
                    <li><?php echo $_SESSION['array_dados_pessoais']['objetivo'] ?></li></br>
                </ul>
                </br>
                <strong>
                    <h2>FORMAÇÃO</h2>
                </strong>
                <ul>
                    <li><?php echo $_SESSION['array_facade']['escolaridade'] . ' em ' . $_SESSION['array_facade']['curso'] . ' pela ' . $_SESSION['array_facade']['instituicao'] . ',' . ' conclusão em ' . $_SESSION['array_facade']['conclusao'] . '.' ?></li>
                </ul>
                </br>
                <strong>
                    <h2>EXPERIÊNCIA PROFISSIONAL</h2>
                </strong>
                <ul>
                    <li><?php require('require/exp_prof.php') ?></li>
                </ul>
                </br>
                <strong>
                    <h2>ATIVIDADES EXTRACURRICULARES</h2>
                </strong>
                <ul>
                    <li><?php echo $_SESSION['array_facade']['extra_ativ'] . ' - ' .  $_SESSION['array_facade']['extra_inst'] ?></li>
                </ul>
                </br>
                <strong>
                    <h2>IDIOMAS</h2>
                </strong>
                <ul>
                    <li><?php echo $_SESSION['array_idioma']['idioma_curso'] . ' - ' . $_SESSION['array_idioma']['idioma_nivel'] . ' - ' . $_SESSION['array_idioma']['idioma_inst'] ?></li>
                </ul>
</body>
</html>