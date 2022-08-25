<?php

namespace APP\Model;

use APP\Model\DAO\ProviderDAO;
use APP\Model\Provider;
use APP\Model\Address;
use APP\Utils\Redirect;
use APP\Model\Validation;
use PDOException;

require "../../vendor/autoload.php";

if (empty($_POST)){
    session_start();
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida'
    );
}

$providerCNPJ = $_POST["cnpj"];
$providerName = $_POST["name"];
$providerPhone = $_POST["phone"];
$providerAddress = $_POST["address"];

$error = array();

if(!Validation::validateCnpj($providerCNPJ)) {
    array_push($error, "CNPJ inválido");
}

if(!Validation::validateName($providerName)) {
    array_push($error, "o Nome do Fornecedor não pode estar vazio");
}

if ($error) {
    Redirect::redirect(
        message: $error,
        type:'warning'
    );
} else {
    $provider = new Provider(cnpj: $providerCNPJ, name: $providerName, phone: $providerPhone, address: new Address(
        publicPlace: '',
        streetName: '',
        numberOfStreet: '',
        complement: '',
        neighborhood: '',
        city: '',
        zipCode: ''
    ));
    Redirect::redirect(
        message: "o Fornecedor $providerName foi cadastrado com sucesso"
    );
}