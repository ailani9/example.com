<?php
require '../core/bootstrap.php';
require '../core/db_connect.php';

$meta=[];
$meta['title']="Login";


$input = filter_input_array(INPUT_POST,
    [
        'email'=>FILTER_SANITIZE_EMAIL,
        'password'=>FILTER_UNSAFE_RAW
    ]
);

if(!empty($input))
{
    $input = array_map('trim', $input);
    //$hash=password_hash('password', PASSWORD_DEFAULT);
    $sql='SELECT id, hash FROM users WHERE email=:email';

    $stmt=$pdo->prepare($sql);
    $stmt->execute(
        [
            'email'=>$input['email']
        ]
    );

    $row=$stmt->fetch();

    if($row)
    { 
        $match = password_verify($input['password'], $row['hash']);
        if($match)
        {
            $_SESSION['user'] = [];
            $_SESSION['user']['id']=$row['id'];
            header('LOCATION: ' . $_POST ['goto']);
        }
    }

    /*var_dump(password_verify('12345', $hash));

    if(!empty($_POST))
    {
        $_SESSION['user'] = [];
        $_SESSION['user'] ['id']=12345;
        header('LOCATION: ' . $_POST['goto']);
    }*/
}

$meta=[];
$meta['title']="Login";

$goto=!empty($_GET['goto'])?$_GET['goto']:'/';

$content=<<<EOT
<h1>Login</h1>

<form method="post" autocomplete="off">
        <div class="form-group">
            <label for="email">Email</label>
            <input 
                    class="form-control"
                    id="email"
                    name="email"
                    type="email"
                    >
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input 
                    class="form-control"
                    id="password"
                    name="password"
                    type="password"
                    >
        </div>


    <input name="goto" value="{$goto}" type="hidden">
    <input type="submit" class="btn btn-primary">
</form>

EOT;

require '../core/layout.php';




