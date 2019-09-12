<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>usuario CI</title>
</head>
<body>
    <h1>View usuario</h1>
    <hr>
    <a href="/usuario/cadastrar">Cadastrar</a>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>-</th>
            <th>-</th>
        </thead>
        <tbody>
            <?php foreach($usuarios as $u): ?>
                <tr>
                    <td><?= $u->id ?></td>
                    <td><?= $u->nome ?></td>
                    <td><?= $u->email ?></td>
                    <td> <a  href="/usuario/editar?id=<?= $u->id ?>">Editar</a></td>
                    <td> <a  href="/usuario/excluir?id=<?= $u->id ?>">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    
</body>
</html>
