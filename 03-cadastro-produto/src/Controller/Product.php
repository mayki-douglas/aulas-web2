<?php

namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Validation;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();
    // Redirecionar o usuário
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$productName = $_POST["name"];
$productCostPrice = str_replace(",", ".", $_POST["cost"]);
$quantity = $_POST["quantity"];
$provider = $_POST["provider"];

$error = array();

// array_unshift -> Adicionar no início do array
// array_push -> Adicionar no final do array

// array_shift -> Remove do início do array
// array_pop -> Remove do final do array

if (!Validation::validateName($productName)) {
    array_push($error, "O nome do produto deve conter mais de 2 caracteres!!!");
}

if (!Validation::validateNumber($productCostPrice)) {
    array_push($error, "O preço de custo do produto deverá ser maior que zero!!!");
}

if (!Validation::validateNumber($quantity)) {
    array_push($error, "A quantidade de entrada deverá ser maior que zero!!!");
}

if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $product = new Product(tax: 0.2, operationCost: 0.07, lucre: 0.8, 
    cost:$productCostPrice, name: $productName, quantity: $quantity, provider: new Provider(
        cnpj: '00000/0001',
        name:"Fornecedor Padrão"
    ));
    Redirect::redirect(
        message: "O produto $productName foi cadastrado com sucesso!!!"
    );
    
}
