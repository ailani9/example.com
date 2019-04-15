<?php

require '../../core/db_connect.php';

$content=null;

$stmt = $pdo->query ("SELECT * FROM posts");

$meta=[];
$meta['title']="My Blog";

$items=null;

while($row =$stmt->fetch())
{
    $items.=
    "<a href=\"view.php?slug={$row['slug']}\" class=\"list-group-items\">".
     "{$row['title']}</a>";

}

$content=<<<EOT
<h1>My Blog</h1>
<div class=\"list-group\">{$items}</div>
<hr>
<div>
    <a href="/posts/add.php">Add</a>
</div>

EOT;

require '../../core/layout.php';
