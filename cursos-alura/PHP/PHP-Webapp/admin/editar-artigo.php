<?php

require '../config.php';
require '../src/Artigo.php';
require '../src/functions/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $objArtigo = new Artigo($mysql);
    $objArtigo->editar(
            $_POST['id'],
            $_POST['titulo'],
            $_POST['conteudo']
    );
    redireciona('index.php');
}

$objArtigo = new Artigo($mysql);
$art = $objArtigo->encontrarPorId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
</head>

<body>
    <div id="container">

        <h1>Editar Artigo</h1>

        <a class="botao botao-block" href="index.php">Voltar</a>

        <form action="editar-artigo.php" method="post">
            <p>
                <label for="titulo">Digite o novo título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="titulo"><?php echo $art['conteudo']; ?></textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
            </p>
            <p>
                <button class="botao">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>