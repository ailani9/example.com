<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

checkSession();

$args =
[
    'id'=>FILTER_SANITIZE_STRING
];

    $input = filter_input_array(INPUT_GET, $args);
    $stmt =$pdo->prepare('DELETE FROM users WHERE id =:id');

    if($stmt->execute(['id']))
    {
        header('LOCATION:/users');
    }