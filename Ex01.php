<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<>, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="" method="get">
        Nota 1: <input type="text" name="num1"><br>
        Nota 2: <input type="text" name="num2"><br>
        Nota 3: <input type="text" name="num3"><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    $menor = $_GET['numero1'];
    $meio = $_GET['numero2'];
    $maior = $_GET['numero3'];
    $media = ($num1 +$num2 +$num3) / 3;
    echo "Média: $media"
    ?>
</body>
</html>