<?php

namespace App\Api;

class Api{

    /**
     * URL base do PSP
     * @var string
    */
    
    private $baseUrl;


    /**
     * Client ID do oAuth2 do PSP
     * @var string
    */
    
    private $clientId;

    /**
     * Client secret do oAuth2 do PSP
     * @var string
    */
    
    private $clientSecret;

    /**
     * Caminho absoluto até o arquivo do certificado
     * @var string
    */

    private $certificate;

    public function __construct(){
        //parei em 9:20 de 
        //https://www.youtube.com/watch?v=6Es3i2eH5K4&list=PLEfPjfBpCxnH7K6HX4BIcqN2UpZaYKS6D&index=2&t=2664s
    }
}