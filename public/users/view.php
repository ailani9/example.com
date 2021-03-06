<?php
require '../../core/bootstrap.php';

include '../../core/db_connect.php';

checkSession();

$args = 
[
    'id'=>FILTER_SANITIZE_STRING,
];

$input = filter_input_array(INPUT_GET, $args);

$id = preg_replace("/[^a-z0-9-]+/", "", $input['id']);

$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);

$row = $stmt->fetch();

$meta=[];
$meta['title']=$row['email'];
$meta['first_name']=$row['first_name'];
$meta['last_name']=$row['last_name'];

$content=<<<EOT

<h1>{$meta['title']}</h1>

{$row['first_name']}

<hr>

<div>
    <a class="btn btn-primary" href="/users/edit?id={$row['id']}">
        <i class="fa fa-pencil" aria-hidden="true"></i>
        Edit
    </a>
</div>

EOT;

require '../../core/layout.php';