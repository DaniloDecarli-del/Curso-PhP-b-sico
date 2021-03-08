<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = $_POST["nome"];
        $ano = $_POST["ano"];
        $sexo = $_POST["sexo"];
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos."
    ?>
    <a href="exercicio02.html">Voltar</a>
</div>
</body>
</html>
 