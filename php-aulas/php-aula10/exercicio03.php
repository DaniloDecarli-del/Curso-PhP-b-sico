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
    switch ($e) {
        case "AM":
        case "RR":
        case "AP":
        case "TO":
        case "RO":
        case "AC":
            echo "Região Norte";
            break;
        case "MA":
        case "PI":
        case "CE":
        case "RN":
        case "PE":
        case "PB":
        case "SE":
        case "AL":
        case "BA":
            echo "Região Nordeste";
            break;
        case "MT":
        case "MS":
        case "GO":
            echo "Região Centro-Oeste";
            break;
        case "SP":
        case "RJ":
        case "ES":
        case "MG":
            echo "Região Sudeste";
            break;
        case "PR":
        case "RS":
        case "SC":
            echo "Região Sul";
    }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>