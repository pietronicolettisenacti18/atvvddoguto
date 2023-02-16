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
        Nota 1: <input type="text" name="numero1"><br>
        Nota 2: <input type="text" name="numero2"><br>
        Nota 3: <input type="text" name="numero3"><br>
        <button type="submit">Testar</button>
    </form>
    <?php
    $menor = $_GET['numero1'];
    $meio = $_GET['numero2'];
    $maior = $_GET['numero3'];
    
    if ($meio < $menor){
        $temp = $menor;
        $menor = $maior;
        $meio = $temp;
    }

    if($maior < $menor){
        $temp = $menor;
        $menor = $maior;
        $maior = $temp;
    }

    if ($maior < $menor){
        
        $temp = $meio;
        $meio = $maior;
        $maior = $temp;
    }
    echo "$menor < $meio < $maior";
    ?>
    </body>
</html>