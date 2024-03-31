<?php
$lots = \models\Lot::getAll();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="alert">
        <?php if (!empty($_GET['error'])): ?>
        <p style="color: red;">
            <?= htmlentities($_GET['error']) ?>
            <a href="/">x</a>
        </p>
        <?php endif; ?>
    </div>

    <div class="form">
        <form action="" method="POST">
            <input type="text" name="autcion_number" placeholder="Номер торгов">
            <br>
            <input type="text" name="lot_number" placeholder="Номер лота">
            <br>
            <input type="submit" value="Найти">
        </form>
    </div>

    <h2>Список</h2>
    <table>
        <thead>
            <th>Описание</th>
            <th>url</th>
            <th>Цена</th>
            <th>Email</th>
            <th>телефон</th>
            <th>ИНН</th>
            <th>Номер дела о банкротстве</th>
            <th>Дата торгов</th>
        </thead>
        <tbody>
            <?php foreach ($lots as $lot): ?>
            <tr>
                <td><?= htmlentities($lot['description']) ?></td>
                <td><?= htmlentities($lot['url']) ?></td>
                <td><?= htmlentities($lot['price']) ?></td>
                <td><?= htmlentities($lot['email']) ?></td>
                <td><?= htmlentities($lot['phone']) ?></td>
                <td><?= htmlentities($lot['inn']) ?></td>
                <td><?= htmlentities($lot['bankruptcy_number']) ?></td>
                <td><?= $lot['date_auction'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>