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
     $n1 = $_GET['nota1'];
     $n2 = $_GET['nota2'];
     $m = ($n1 + $n2) / 2;
     if ($m >= 7){
         $tipo = "Parabéns!!! você está APROVADO";
     }
     elseif (($m >=5) && ($m <7)){
         $tipo = "Você está de RECUPERAÇÃO";
     }
     else {
         $tipo = "Não foi dessa vez REPROVADO";
     }
     echo "Sua média é $m " . $tipo ;


    ?>
</div>
</body>
</html>
