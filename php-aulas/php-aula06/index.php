<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="aula06/_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
     $atual = $_GET["aa"]; /* Essa linha vai pegar o ano na URL */
     echo "O ano atual é $atual e o ano anterior é " . --$atual;
    ?>
</div>
</body>
</html>
