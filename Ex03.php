<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Nota 1: <input type="text" name= "nota1"><br>
        Nota 2: <input type="text" name= "nota2"><br>
        <button type="submit">Testar</button>
        <?php
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $media = ($nota1 + $nota2) / 2;

        echo "Média: $media <br>";

       if($media <7)
       echo "Reprovado";

       elseif ($media == 10)
       echo " Aprovado com Honra ao mérito";
       
       else
       echo "Aprovado"
       ?>
    </form>
</body>
</html>