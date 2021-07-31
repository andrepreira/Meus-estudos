<?php

//Autoload criado para receber classes com o sufixo .class.php ou sufixo .php
spl_autoload_register(
    function (string $namespaceClasse): void {
        $caminho = "/src";
         $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
         @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.class.php";
         @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
       
    }
);