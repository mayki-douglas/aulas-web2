<?php

namespace APP\Model;

class Address
{
    private int $id;
    private string $publicPlace;
    private string $streetName;
    private string $numberOfStreet;
    private string $complement;
    private string $neighborhood;
    private string $city;
    private string $zipCode;

    public function __construct(string $publicPlace, string $streetName, string $numberOfStreet, string $complement, string $neighborhood, string $city, string $zipCode, int $id=0)
    {
        $this->id = $id;
        $this->publicPlace = $publicPlace;
        $this->streetName = $streetName;
        $this->numberOfStreet = $numberOfStreet;
        $this->complement = $complement;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->zipCode = $zipCode;
    }

    public function __get($attribute)
    {
        return this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }
}
