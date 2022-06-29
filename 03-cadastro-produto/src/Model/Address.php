<?php

namespace APP\Model;

class Address
{
    private string $publicPlace;
    private string $numberOfStreet;
    private string $complement;
    private string $neighborhood;
    private string $city;
    private string $zipCode;

    public function __construct(string $publicPlace, string $numberOfStreet, string $complement, string $neighborhood, string $city, string $zipCode)
    {
        $this->publicPlace = $publicPlace;
        $this->numberOfStreet = $numberOfStreet;
        $this->complement = $complement;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->zipCode = $zipCode;
    }
}
