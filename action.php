<?php
include "db.php";
function check_autorize($login)
{
    global $users;
    return array_key_exists($login, $users);
}