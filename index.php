<?php
include "db.php";
include "header.php";
$user_form = '<form action="index.php" method="post" name="autoForm">
Логин: <input type="text" name="login">
Пароль: <input type="password" name="pass">
<input type="submit" value="Подтвердить" name="go">
</form>';

echo $user_form;

include "footer.php";