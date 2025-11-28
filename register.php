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
        echo "<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                  title: 'Sucesso!',
                  text: 'Livro cadastrado com sucesso!',
                  icon: 'success',
                  background: '#F5F5F5',
                  color: '#333333',
                  confirmButtonColor: '#2C73D2'
                }).then(() => {
                  window.location.href = 'painel.php';
                });
            </script>
        </body>
        </html>";
        exit;
    } else {
        echo "<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                  title: 'Erro!',
                  text: 'Erro ao cadastrar livro!',
                  icon: 'error',
                  background: '#E57373',
                  color: '#333333',
                  confirmButtonColor: '#2C73D2'
                }).then(() => {
                  window.location.href = 'logout.php';
                });
            </script>
        </body>
        </html>";
    }
}
?>
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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