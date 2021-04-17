<?php
include "db.php";
include "header.php";
include "action.php";
if (isset($_POST["go"])) {
    $login = $_POST["login"];
    $password = $_POST["pass"];
    if (check_autorize($login)) {
        echo "Привет, $login";
        if (check_admin($login, $password)) {
            echo "<a href='hello.php'>Просмотр отчета</a>";
        }

    } else {
        echo "Ошибка авторизации!";
    }
}
$user_form = '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" name="autoForm">
Логин: <input type="text" name="login">
Пароль: <input type="password" name="pass">
<input type="submit" value="Подтвердить" name="go">
</form>';

echo $user_form;

include "footer.php";