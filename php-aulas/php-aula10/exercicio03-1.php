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
    $e = $_GET["est"];
     if ($e == "AM" || $e == "RR" || $e =="AP" || $e == "TO" || $e == "RO" || $e == "AC") {
         echo "Região Norte";
     }
     if ($e == "MA" || $e == "PI" || $e =="CE" || $e == "RN" || $e == "PE" || $e == "PB" || $e == "SE" || $e == "AL" || $e == "BA"){
         echo "Região Nordeste";
    }
    if ($e == "MT" || $e == "MS" || $e =="GO"){
        echo "Região Centro-Oeste";
    }
    if ($e == "SP" || $e == "RJ" || $e =="ES" || $e =="MG"){
        echo "Região Sudeste";
    }
    if ($e == "PR" || $e == "RS" || $e =="SC"){
        echo "Região Sul";
    }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>