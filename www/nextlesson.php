<?php

require("common.php");

    if(empty($_SESSION['user']))
    {
        header("Location: home.php");
        die("Redirecting to login.php");
    }
    // Everything below this point in the file is secured by the login system

//Get values from user for display
$uid=htmlentities($_SESSION['user']['id'], ENT_QUOTES, 'UTF-8');
$username=htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
$lesson_num=htmlentities($_SESSION['user']['lesson'], ENT_QUOTES, 'UTF-8');

if (isset($_GET["id"]))
{
$id = $_GET["id"];
$_SESSION['user']['lesson'] = $id;

$query='UPDATE `users`
SET `lesson` = \''. $id .'\'
WHERE `id` = \''. $uid . '\';';

$stmt=$db->prepare($query);
$stmt->execute();
}


header("Location: question.php");
die("Relocating");
