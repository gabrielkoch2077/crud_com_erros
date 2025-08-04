<?php
// Exclusão protegida contra SQL Injection
include("conexao.php");

$id = $_GET["id"] ?? null;

if ($id !== null && is_numeric($id)) {
    $stmt = mysqli_prepare($conn, "DELETE FROM usuarios WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header("Location: index.php");
?>