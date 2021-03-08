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
       $a = isset($_GET["ano"])?$_GET["ano"]:1900;
       $i = date("Y") - $a;
       echo "Você nasceu em $a e tera $i anos. <br/>";
       if ($i >= 18) {
           $v = "Ja pode votar";
           $d = "Ja pode dirigir";
       }
       else {
           $v = "não pode votar";
           $d = "não pode dirigir";
       }
       echo "Com essa idade você $v e tambem $d";
    ?>
</div>
</body>
</html>
