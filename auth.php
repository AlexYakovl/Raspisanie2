<?php
session_start(["use_strict_mode" => true]);
require('database.php');

if (isset($_POST['login'])){
    $result = $db->query("SELECT * FROM \"Schema_LW\".\"Аккаунты\" WHERE \"Login\" = '".$_POST['login']."'");


    if ($row = $result->fetch())
    {
        if (($_POST["password"]) == $row['Password']){
            $_SESSION['username'] = $row['Login'];
            $_SESSION['user_id'] = $row['ID_AC'];
            header("Location: ../profile.php");
            die();
        }
        else {
            $_SESSION['message'] = 'Вы ввели неправильный пароль!';
            header("Location: ../login.php");
            die();
        }

    }
    else {
        $_SESSION['message'] = 'Вы ввели неправильный логин!';
        header("Location: ../login.php?");
        die();
    }

}
if ($_GET['logout'] == 1){
    session_unset();
    header("Location: ../login.php");
    die();
}