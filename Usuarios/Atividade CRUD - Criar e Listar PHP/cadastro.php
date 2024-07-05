<!-- Inicia uma nova sessão ou retoma uma sessão existente. -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Funcionario</title>
</head>
<body>

    <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <main>
        <form action="processa.php" method="post">

            <label for="id_cpf">CPF <span>(Apenas numeros)</span>: </label>
            <input type="text" id="id_cpf" name="id_cpf" placeholder="Ex.: 11122233399" required>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone <span>(Apenas numeros)</span>: </label>
            <input type="text" id="telefone" name="telefone" placeholder="Ex.: 5561912345678" required>

        </form>
    </main>
</body>
</html>