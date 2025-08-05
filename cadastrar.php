<?php
// Cadastro com erros de sintaxe e falta de validação
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href='index.php';</script>";
        exit;
    } else {
        echo "Erro ao cadastrar!";
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>