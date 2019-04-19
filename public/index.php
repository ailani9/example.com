<?php
require '../core/bootstrap.php';

checkSession();

//$_SESSION=[];

//$_SESSION['user'] = [];
//$_SESSION['user'] ['id']=12345;

$meta=[];
$meta['title']='AI';

$content=<<<EOT


<h1>Hello, I am Groot!</h1>
    <div>
        <img class="avatar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvtU2lUd2E9RdbTWRF9GKcF9ecAAaIkX00S0CAZaLzHVaTCnz8" alt="Ai">
    </div>    
        <p>G'day Mate!  </br> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                culpa qui officia deserunt mollit anim id est laborum.
        </p>

EOT;

require '../core/layout.php';
        