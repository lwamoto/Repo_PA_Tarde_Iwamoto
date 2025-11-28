<?php
include "connection.php";

$busca = $_GET['busca'] ?? '';

if ($busca != '') {
    $sql = "SELECT * FROM livros WHERE titulo LIKE ? OR autor LIKE ? OR categoria LIKE ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $like = "%" . $busca . "%";
        $stmt->bind_param("sss", $like, $like, $like);
        $stmt->execute();
        $resultado = $stmt->get_result();
    } else {
        // Se prepare falhar, mostra erro
        die("Erro ao preparar a consulta: " . $conn->error);
    }
} else {
    $sql = "SELECT * FROM livros";
    $resultado = $conn->query($sql);
}
?>

<link rel="stylesheet" href="style.css">
<body>
  <div class="container-2">
    <a href="painel.php">VOLTAR</a>
    <h1>Desafio PHP — Sistema de Cadastro de
        Livros da Biblioteca Escolar</h1>
    <form method="GET" action="buscar.php">
        <input class="input-text" type="text" name="busca" placeholder="Pesquisar livro..." required>
        <button class="button-submit" type="submit">🔍 Buscar</button>
      
    </form>

    <table border="3">
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Ano</th>
        <th>Categoria</th>
      </tr>

      <?php
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
      ?>
    </table>
  </div>
</body>
