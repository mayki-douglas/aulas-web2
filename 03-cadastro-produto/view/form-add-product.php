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
        <fieldset>
            <legend>Cadastro de produtos</legend>
                <section class="columns-3">
                    <article>
                        <label for="name">Nome do produto</label>
                        <input type="text" id="name" name="name">
                    </article>
                    <article>
                        <label for="quantity">Quantidade</label>
                        <input type="text" id="quantity" name="quantity">
                    </article>
                    <article>
                        <label for="price">Preço</label>
                        <input type="number" id="price" name="price">
                        <button>ok</button>
                    </article>
            </section>
        </fieldset>
    </form>
</body>
</html>