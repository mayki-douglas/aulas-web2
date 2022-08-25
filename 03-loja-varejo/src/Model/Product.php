<?php

namespace APP\Model;

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private int $quantity;
    private Provider $provider;

    public function __construct(float $cost, float $tax, float $operationCost, float $lucre, string $name, int $quantity, Provider $provider, int $id=0)
    {
        self::calculateFinalPrice($cost, $tax, $operationCost, $lucre);
        $this->name = $name;
        $this->quantity = $quantity;
        $this->provider = $provider;
        $this->id = $id;
    }

    private function calculateFinalPrice(float $cost, float $tax, float $costOfOperation, float $lucre = 0.4): void
    {
        $this->price = ($cost + $tax + $costOfOperation) / (1 - $lucre);
    }

    public function calculateCostPrice(float $tax, float $costOfOperation, float $lucre = 0.4): float
    {
        return $this->price - $tax - $costOfOperation - ($this->price * $lucre);
    }

    public function calculateMarkup(float $costOfOperation): float
    {
        return $this->price / $costOfOperation;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }
}
