<?php

$productName = $_POST["name"];
$productPrice = $_POST["price"];
$quantity = $_POST["quantity"];

echo "<h1>Dados do produto</h1>";
echo "<p>Nome do produto: $productName</p>";
echo "<p>Preço do produto: $productPrice</p>";
echo "<p>Quantidade: $quantity</p>";
