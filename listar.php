<?php
include('conexao.php');

$sql = "SELECT * FROM PESSOA";
$resultado = $mysqli->query($sql);
$registros = $resultado->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<table class="table">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">CPF</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($registros as $registro){?>
                <th scope="row"><?php echo $registro[0];?></th>
                <td><?php echo $registro[1];?></td>
                <td><?php echo $registro[3];?></td>
                <td><?php echo $registro[2];?></td>
                </tr>
            <?php }?>
    </tbody>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>