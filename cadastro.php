<?php
include('conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO PESSOA (nome, cpf, rg, email, sexo, descricao) values ('$nome', '$cpf', '$rg', '$email', '$sexo', '$descricao')";
$resultado = $mysqli->query($sql);

echo 'Pessoa cadastrada com sucesso';


?>