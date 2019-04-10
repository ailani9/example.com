<?php



class Validate
{

    public $validation = [];

    private $data = [];

    public function notEmpty($value)
    {

        if(!empty($value))
        {
            return true;
        }

        return false;

    }

    public function email($value)
    {

        if(filter_var($value, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }

        return false;

    }

    public function check($data)
    {

        $this->data = $data;

        foreach(array_keys($this->validation) as $fieldName)
        {

            $this->rules($fieldName);
        }

    }

    public function rules($field)
    {
        foreach($this->validation[$field] as $rule)
        {
            if($this->{$rule['rule']}($this->data[$field]) === false)
            {
                $this->errors[$field] = $rule;
            }
        }
    }

    public function error($field)
    {
        if(!empty($this->errors[$field]))
        {
            return $this->errors[$field]['message'];
        }

        return false;
    }

    public function userInput($key)
    {
        return (!empty($this->data[$key])?$this->data[$key]:null);
    }
}

$valid = new Validate();

$args = 
[
  'name'=>FILTER_SANITIZE_STRING,
  'subject'=>FILTER_SANITIZE_STRING,
  'message'=>FILTER_SANITIZE_STRING,
  'email'=>FILTER_SANITIZE_EMAIL,
];

$input = filter_input_array(INPUT_POST, $args);


//debug($input);

if(!empty($input))
{

    $valid->validation = 
    [
        'email'=>
        [
            [
                'rule'=>'email',
                'message'=>'Please enter a valid email'
            ],
            [
                'rule'=>'notEmpty',
                'message'=>'Please enter an email'
            ]
        ],
        'name'=>
        [
            [
                'rule'=>'notEmpty',
                'message'=>'Please enter your name'
            ]
        ],
        'message'=>
        [
            [
                'rule'=>'notEmpty',
                'message'=>'Please add a message'
            ]
        ],
    ];

    $valid->check($input);

    if(empty($valid->errors))
    {
        $message = "<div class=\"message-success\">Your form has been submitted!</div>";
        //header('Location: thanks.php');
    }
    else
    {
        $message = "<div class=\"message-error\">Your form has errors!</div>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hello, I am Groot</title>
        <link rel="stylesheet" type="text/css" href="./src/scss/main.scss">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="description" content="My resume">
        <meta name="keywords" content="hello, intro, web developer, full stack">
        <meta name="msapplication.config" content="http://www.traveller.com.au/content/dam/images/g/u/n/q/h/0/image.related.articleLeadwide.620x349.gunpvd.png/1488330286332.png">
    </head>
    <body>
        <header>
            <span class="logo">My Website</span>
            <a id="toggleMenu">Menu</a>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="resume.html">Resume</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <form action="contact.php" method="POST">
            <h1>Contact</h1>      
            <?php echo (!empty($message)?$message:null);?>    
                <div>
                    <label for="name">Name</label></br>
                    <input id="name" type="text" name="name" value="<?php echo $valid->userInput('name'); ?>">
                    <div class="text-error"><?php echo $valid->error('name'); ?></div>
                </div>
                <div>
                    <label for="email">Email</label></br>
                    <input id="email" type="text" name="email" value="<?php echo $valid->userInput('email'); ?>">
                    <div class="text-error"><?php echo $valid->error('email'); ?></div>
                </div>
                <div>
                    <label for="message">Message</label></br>
                    <textarea id="message" name="message"><?php echo $valid->userInput('message'); ?></textarea>
                    <div class="text-error"><?php echo $valid->error('message'); ?></div>
                </div>
                <div>
                    <input type="hidden" name="subject" value="New Submission!">
                </div>
                <div>
                    <input type="submit" value="Send">
                </div>
        </form>


    <script>

            var toggleMenu = document.getElementById('toggleMenu');
            var nav = document.querySelector('nav');
            toggleMenu.addEventListener('click',
                function()
                {
                    if(nav.style.display=='block')
                    {
                        nav.style.display='none';
                    }
                    else
                    {
                        nav.style.display='block';
                    }
                }
            );
    </script>
            
    </body>
</html>