<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Cadastro</title>
</head>

<body>
    <h1>Cadastro de usuário</h1>

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>


    <form action="config.php" method="POST">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="" placeholder="Digite seu nome" required>

        <label for="">E-mail:</label>
        <input type="text" name="email" id="" placeholder="Digite seu e-mail" required>

        <button type="submit" value="Enviar">Enviar</button>


    </form>
</body>

</html>