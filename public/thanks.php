<?php
require '../core/bootstrap.php';
checkSession();

$meta=[];
$meta['title']='AI\'s Mahalo';

$content=<<<EOT

    <p>Mahalo for sending me an email! I will be sure to reply shortly.<p>

EOT;

require '../core/layout.php';