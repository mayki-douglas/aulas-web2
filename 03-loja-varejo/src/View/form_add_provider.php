<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja de Varejo - Novo Fornecedor</title>
</head>
<body>
<nav class="bg-blue-400">
        <ul>
            <li class="inline">
                <a href="../../index.html">Home</a>
            </li>
            <li class="inline">
                <a href="form_add_product.php">Novo produto</a>
            </li>
            <li class="inline">
                <a href="#">Novo fornecedor</a>
            </li>
            <li class="inline">
                <a href="../Controller/Product.php?operation=list">Listar produtos</a>
            </li>
        </ul>
    </nav>
    <form action="../Controller/Provider.php?operation=insert" method="POST">
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Dados do Fornecedor</legend>
            <section class="columns-2">
                <article>
                    <label for="cnpj">CNPJ do Fornecedor</label>
                    <input type="text" id="cnpj" name="cnpj" class="border border-blue-400">
                </article>
                <article>
                    <label for="name">Nome do Fornecedor</label>
                    <input type="text" id="name" name="name" class="border border-blue-400">
                </article>
            </section>
            <section class="mt-4 columns-2">
            <article>
                    <label for="phone">Telefone do Fornecedor</label>
                    <input type="number" id="phone" name="phone" class="border border-blue-400">
                </article>
            </section>
        </fieldset>
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Cadastro de Endereço</legend>
            <section class="columns-2">
                <article>
                    <label for="address">Endereço</label>
                    <input type="text" id="address" name="address" class="border border-blue-400">
                </article>
                <article>
                    <label for="numberOfStreet">Número</label>
                    <input type="number" id="numberOfStreet" name="numberOfStreet" class="border border-blue-400">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="complement">Complemento</label>
                    <input type="text" id="complement" name="complement" class="border border-blue-400">
                </article>
                <article>
                    <label for="neighborhood">Bairro</label>
                    <input type="text" id="neighborhood" name="neighborhood" class="border border-blue-400">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="city">Cidade</label>
                    <input type="text" id="city" name="city" class="border border-blue-400">
                </article>
                <article>
                    <label for="zipCode">CEP</label>
                    <input type="text" id="zipCode" name="zipCode" class="border border-blue-400">
                </article>
            </section>
        </fieldset>
        <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Cadastrar Fornecedor</button>
            </article>
    </form>
</body>
</html>