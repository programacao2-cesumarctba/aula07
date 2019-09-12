<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <hr>
    <form action="/produto/<?= $acao ?>" method="POST">
        <?php if ($edita) : ?>
            ID:     <input type="text" name="id" value="<?= $produto[0]->id ?>" readonly> <br>
            Nome:   <input type="text" name="nome" value="<?= $produto[0]->nome ?>"> <br>
            Preço:  <input type="text" name="preco" value="<?= $produto[0]->preco ?>"> <br>        
        <?php else: ?>
            Nome: <input type="text" name="nome"> <br>
            Preço: <input type="text" name="preco"> <br>
        <?php endif ?>

        <input type="submit" value="Salvar">
        
    </form>
</body>
</html>