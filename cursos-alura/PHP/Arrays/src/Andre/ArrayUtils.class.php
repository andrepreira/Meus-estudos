<?php declare(strict_types=1);

namespace Andre;

require 'autoload.php';

class ArrayUtils{
    public static function remover(int $elemento, array &$array)
    {
        
        $posicao = array_search($elemento, $array, true);
        if (!is_int($posicao)){
            echo "Não esse elemento no existe array";
            return;
        }  
        unset($array[$posicao]);
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistas = [];
        foreach ($array as $key => $value) {
            if ($value > $saldo) {
                $correntistas[] = $key;
            }
        }

        return $correntistas;
    }
}