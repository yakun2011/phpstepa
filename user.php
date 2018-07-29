<?php require_once __DIR__ . '/header.html' ?>

<?php

require_once __DIR__ . '/functions.php';

$user = '';

if ($_POST && $_POST['user']) {
    $user = $_POST['user'];
}

$users = getUsersList('users.json');

$isUser = false;

foreach ($users as $key => $value) {
    if ($key == $user) {
        echo 'такой пользователь есть';
        $isUser = true;
    }
}
if (false == $isUser) {
    echo 'такого пользователя нет';
}

?>

    <form action="" method="post">

        <input type="text" name="user">
        <button type="submit">Проверить</button>

    </form>

<?php require_once __DIR__ . '/footer.html' ?>