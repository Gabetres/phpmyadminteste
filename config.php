<?php

session_start();
include("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//filtrar os dados e garantir que o campo seja limpo após a submissao

//echo "Nome $nome <br>";
//echo "E-mail $email <br>"

$result = "INSERT INTO usuarios (nome, email, criadoem) values ('$nome','$email',now())";

$resultado = mysqli_query($conn, $result);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<span>Usuario cadastrado com sucesso</span>";
    header("Location: index.php");
} else {
    header("Location: index.php");
}

?>



