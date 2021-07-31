<?php

namespace Andre;

class Calculadora{
    public function calculaMedia(array $notas): ?float
    {
        $qtdNotas = sizeof($notas);

        if ($qtdNotas == 0){
            return null;
        } 
        $soma = 0;
        foreach ($notas as $key => $value) {
            $soma+=$value;
        }
        
        $media = ($soma)/$qtdNotas;
        
        return $media;
    }
}