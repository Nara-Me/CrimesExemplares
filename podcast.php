<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crimes Exemplares</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" type="text/css" href="/audio/dist/css/green-audio-player.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <script src="audio/dist/js/green-audio-player.js"></script>
</head>

<body>
<a href="index.php?target=back">
    <div class="voltar">
        <audio id="tap">
            <source src="Sons/Tape.mp3">
        </audio>
        <img class="vol tt" src="img/Tape/tape.png" alt="Voltar">
        <img class="vol pp" src="img/Tape/tape.png" alt="Voltar">
    </div>
</a>

<?php
$var = $_GET['target'];

if ($var > 1) {
echo '
<div class="atras">
    <a href="podcast.php?target=' . $var-1 . '"><img id="seta" src="img/seta.png" alt="seta"></a>
</div>
';
}

if ($var < 15) {
    echo '
<div class="afrente">
    <a href="podcast.php?target=' . $var+1 . '"><img id="seta" src="img/seta.png" alt="seta"></a>
</div>
';}

echo '<div class="postais">
    <audio id="leaf"><source src="Sons/Folhas.mp3"></audio>
    <img class="postal bb" src="img/FolhaBack.png" alt="folha">
    <img class="postal b" src="img/FolhaBack.png" alt="folha">
    <img class="postal f" src="img/FolhaFront.png" alt="folha">
    <img id="post" class="postal f" src="img/' . $var . '.png" alt="postal">
</div>';
?>
<div class="player">
    <audio autoplay>
        <?php
        echo '<source src="/Podcasts/' . $var . '.mp3">';
        ?>
    </audio>
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
<script>new GreenAudioPlayer('.player');</script>
</html>