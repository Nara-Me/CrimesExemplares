<?php
$target = $_GET['target'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crimes Exemplares</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div id="l" class="loader"></div>

<div class="titulo">
    <p>Crimes Exemplares</p>
    <p>Max Aub</p>
</div>

<div id="caixa">
    <img class="box" src="img/Caixa1.png" height="auto">
    <div class="grid">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo '<audio id="tap"><source src="Sons/Tape.mp3"></audio>';
            echo '<audio id="clunk"><source src="Sons/Clunk.mp3"></audio>';
            echo '<img id="'. $i .'" class="tape" src="img/Tape/'. $i .'.png" alt="cassete">';
        }
        ?>

    </div>
    <img class="box front" src="img/CaixaFront1.png" height="auto">
    <audio id="click">
        <source src="Sons/Click.mp3">
    </audio>

    <?php
    if ($target == 'first') {
        echo '<img id="t" class="box" src="img/Tampa1.png" height="auto">';
    } else {
        echo '<img id="t" class="tampa" src="img/Tampa1.png" height="auto">';
    }
    ?>
</div>

<div class="info">
    <audio id="in">
        <source src="Sons/Folhas.mp3">
    </audio>
    <audio id="out">
        <source src="Sons/Folhas2.0.mp3">
    </audio>
    <img class="folha bb" src="img/FolhaBack.png" alt="folha">
    <img class="folha bbb" src="img/FolhaBack.png" alt="folha">
    <img class="folha" src="img/FolhaFront.png" alt="folha">
    <p class="folha texto">Crimes Exemplares de Max Aub<br/><br/>
        Este projeto é um aglomerado de algumas confissões do livro e a sua respetiva análise em forma de podcasts, no qual cada cassete representa um conto.<br/><br/>
        Trabalho realizado no âmbito da disciplina de Projeto 3 - Aplicações Multimédias.<br/><br/>
        Universidade de Coimbra 2022/2023<br/><br/>
        Por Francisca Oliveira, Kai Santos e Margarida Mendonça</p>
</div>

</body>
<script src="js.js"></script>
</html>
