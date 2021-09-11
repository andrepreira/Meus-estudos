<?php

namespace Alura\Calisthenics\Domain\Endereco;

class Endereco
{
    private string $street;
    private string $number;
    private string $province;
    private string $city;
    private string $state;
    private string $country;

    public function __construct(string $street, string $number, string $province, string $city, string $state, string $country)
    {
        $this->street = $street;
        $this->number = $number;
        $this->province = $province;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }
}