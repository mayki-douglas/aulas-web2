<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Produtos - Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../controller/Product.php" method="POST">
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Cadastro de produtos</legend>
                <section class="columns-3">
                    <article>
                        <label for="name">Nome do produto</label>
                        <input type="text" id="name" name="name" class="border border-blue-400" required minlength="5">
                    </article>
                    <article>
                        <label for="quantity">Quantidade</label>
                        <input type="text" id="quantity" name="quantity" class="border border-blue-400">
                    </article>
                    <article>
                        <label for="price">Preço</label>
                        <input type="number" id="price" name="price" class="border border-blue-400">
                    </article>
                </section>
                <article class="flex justify-end">
                    <button type="submit" class="p-2 text-white bg-blue-700 rounded">ok</button>
                </article>
        </fieldset>
    </form>
</body>
</html>