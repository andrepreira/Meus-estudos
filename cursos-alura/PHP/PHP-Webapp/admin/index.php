<?php

require '../config.php';
require '../src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <a class="botao botao-block"
           href="<?php echo 'http://' .$_SERVER['SERVER_NAME'] .
               $_SERVER['CONTEXT_PREFIX'] .'/'; ?>">Voltar</a>
        <div>
            <?php foreach ($artigos as $art) : ?>
                <div id="artigo-admin">
                    <p><?php echo $art['titulo']?></p>
                    <nav>
                        <a class="botao" href="editar-artigo.php?id=<?php echo $art['id']?>">Editar</a>
                        <a class="botao" href="excluir-artigo.php?id=<?php echo $art['id']?>">Excluir</a>
                    </nav>
                </div>
            <?php endforeach; ?>

        </div>
        <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>