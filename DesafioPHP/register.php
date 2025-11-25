<?php
require "connection.php";

if ($_POST) {
    $titulo  = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO livros (titulo, autor, ano, categoria, quantidade)
            VALUES ('$titulo', '$autor', '$ano', '$categoria', '$quantidade')";

    if (mysqli_query($conn, $sql)) {
        header("Location: painel.php");
        exit;
    } else {
        $erro = "Erro ao cadastrar!";
    }
}
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Cadastrar</h2>

    <?php if(isset($erro)) echo "<p style='color:red; text-align:center;'>$erro</p>"; ?>

    <form method="POST">
        <div class="input-box">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required>
        </div>
        
        <div class="input-box">
            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" required>
        </div>

        <div class="input-box">
            <label for="ano">Ano</label>
            <input type="number" id="ano" name="ano" min="1600" max="2100" step="1" value="<?php echo date('Y'); ?>" required>
        </div>

        <div class="input-box">
            <label for="categoria">Categoria</label>
            <div class="input-box select-box">
                <select  id="categoria" name="categoria" class="style-select" required>
                  <option value="">Selecione...</option>
                  <option value="romance">Romance❤</option>
                  <option value="comedia">Comédia🤣</option>
                  <option value="terror">Terror💀</option>
                   <option value="manga">Manga✨</option>
                </select>
            </div>
        </div>

        <div class="input-box">
            <label for="quantidade">Quantiade</label>
            <input type="number" id="quantidade" name="quantidade" min="1" max="999" step="1" required>
        </div>



        <button type="submit">Cadastrar</button>

    </form>
</div>