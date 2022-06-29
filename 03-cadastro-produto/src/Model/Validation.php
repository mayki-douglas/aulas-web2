<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 0;
    }

    public static function validateNumber(float $number)
    {
        return $number > 0;
    }

    public static function validateCnpj(string $cnpj):bool
    {
        return mb_strlen($cnpj) > 0 & mb_strlen($cnpj) < 19;
    }

    public static function validateAddress(string $publicPlace): bool
    {
        return mb_strlen($publicPlace) > 0;
    }

}
