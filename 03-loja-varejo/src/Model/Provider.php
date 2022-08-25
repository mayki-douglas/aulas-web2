<?php

namespace APP\Model;

class Provider
{
    private string $cnpj;
    private string $name;
    private ?string $phone;
    private ?Address $address;

    public function __construct(string $cnpj, string $name, ?string $phone = null, ?Address $address = null)
    {
        $this->cnpj = $cnpj;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
}
