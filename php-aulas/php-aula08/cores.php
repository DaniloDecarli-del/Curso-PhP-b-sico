<!DOCTYPE html>
<html>
<head>
    <?php
    $txt = $_POST["t"];
    $tam = $_POST["tam"];
    $cor = $_POST["cor"];
    ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
         echo "<span class='texto'>$txt</span>";
    ?>
</div>
</body>
</html>
 