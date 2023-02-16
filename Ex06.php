<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Número 1: <input type="text" name="numero1"><br>
        Número 2: <input type="text" name="numero2"><br>
        Número 3: <input type="text" name="numero3"><br>
        <button type="submit">Testar</button>
    </form>
    <?php
    $maior = $_GET['numero1'];
    $meio = $_GET['numero2'];
    $menor = $_GET['numero3'];

     
    if ($meio < $maior){
        $temp = $maior;
        $maior = $menor;
        $menor = $temp;
    }

    if($maior < $menor){
        $temp = $maior;
        $maior = $menor;
        $menor = $temp;
    }

    if ($menor < $maior){
        
        $temp = $meio;
        $meio = $menor;
        $menor = $temp;
    }
    echo "$maior < $meio < $menor";
    ?>

</html>