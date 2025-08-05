<?php
include("conexao.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Usuários</h1>";

while ($linha = mysqli_fetch_array($resultado)) {
    $id = (int)$linha['id'];
    echo "ID: " . $id . "<br>";
    echo "Nome: " . htmlspecialchars($linha['nome']) . "<br>";
    echo "Email: " . htmlspecialchars($linha['email']) . "<br><br>";
    echo "<a href='editar.php?id=" . $id . "'>Editar</a> | ";
    echo "<a href='excluir.php?id=" . $id . "'>Excluir</a><br><br>";
}

echo "<a href='cadastrar.php'>Cadastrar novo usuário</a><br><br>";
?>
<?php
if (isset($_GET['msg'])) {
    echo "<p>" . htmlspecialchars($_GET['msg']) . "</p>";
}
?>