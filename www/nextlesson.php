<?php

require("common.php");

$id = $_GET['id'];

$query='UPDATE `users`
SET `lesson` = '. $id .'
';
