<?php
$titulo = "Listar Livros";
include "connection.php";
$busca = isset($_GET['busca']) ? $_GET['busca'] : '';

if ($busca != '') {
    $sql = "SELECT * FROM livros WHERE titulo LIKE '%$busca%' OR autor LIKE '%$busca%' OR categoria LIKE '%$busca%'";
} else {
    $sql = "SELECT * FROM livros";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-2">
        <h1>Desafio PHP — Sistema de Cadastro de
            Livros da Biblioteca Escolar</h1>
        <form method="GET" action="painel.php">
            <input class="input-text" type="text" name="busca" placeholder="Pesquisar livro..." required>
            <input class="input-submit" type="submit" value="Buscar">
        </form>
            
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano</th>
                <th>Categoria</th>
            </tr>

            <?php
            $sql = "SELECT * FROM livros";
            $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {
                while ($livro = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $livro['id'] . "</td>";
                    echo "<td>" . $livro['titulo'] . "</td>";
                    echo "<td>" . $livro['autor'] . "</td>";
                    echo "<td>" . $livro['ano'] . "</td>";
                    echo "<td>" . $livro['categoria'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum livro cadastrado.</td></tr>";
            }

            $conn->close();
            ?>
        </table>


    </div>
</body>
</html>