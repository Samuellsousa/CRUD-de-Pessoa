<?php

$mysqli = new mysqli("localhost", "root", "", "cadastro");
if ($mysqli -> connect_errno) {
    echo "Falha ao conectar no banco de dados MySQL: " . $mysqli -> connect_error;
    exit();
  }

?>