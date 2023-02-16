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
        Insira seu turno:
        <select name="turno">
            <option value="m">
                matutino
            </option>
            
            <option value="v">
                vespertino
            </option>

            <option value="n">
                noturno
            </option>
        </select>
        <button type="submit">Testar</button>
    </form>
    <?php
    $turno = $_GET['turno'];
    

    if ($turno == "m" )
    echo "Bom Dia!";

    elseif($turno == "v")
    echo "Boa Tarde!";

    elseif($turno == "n")
    echo "Boa noite!";

    else
    echo "Valor inválido";
    ?>
    </body>
</html>

