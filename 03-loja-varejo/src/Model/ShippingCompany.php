<?php

namespace APP\Model;

class ShippingCompany
{
    private string $cnpj;
    private string $name;

    /**
     * Essa função irá calcular o total do frete com base na distância percorrida para a entrega
     * @param float $distance
     * @return float
     */
    public function shipPrice(float $distance): float
    {
        return $distance * 0.5;
    }
}
