<?php

namespace APP\Model;

class Sale
{
    private Client $client;
    private Employee $employee;
    private array $products;
    private string $dateOfSale;
    private float $total;

    public function calculateSpotPrice(float $discount): void
    {
        $total = self::calculatePrice();
        if (!empty($discount)) {
            $this->total = $total - ($total * $discount);
        } else {
            $this->total = $total;
        }
    }

    /**
     * Essa função deverá calcular o preço total do produto com base em um parcelamento sob o regime de juros composto
     * @param float $tax
     * @param int $period
     * @return float
     */
    public function installmentPrice(float $tax, int $period): float
    {
        $total = self::calculatePrice();
        return $total * pow(1 + $tax, $period);
    }

    /**
     * Essa função irá calcular o total da venda, onde serão somados os subtotais de cada produto relacionado a venda em questão
     * @return float
     */
    private function calculatePrice(): float
    {
        $subtotal = 0;
        foreach ($this->products as $product) {
            $subtotal += $product->price * $product->quantity;
        }
        return $subtotal;
    }
}
