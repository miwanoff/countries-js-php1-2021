<?php
include "db.php";
function check_autorize($login)
{
    global $users;
    return array_key_exists($login, $users);
}

function check_admin($login, $pass)
{
    global $users;
    return array_key_exists($login, $users) && $pass == $users["admin"];
}