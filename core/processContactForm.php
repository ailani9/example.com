<?php

use About\Validation;

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

$message=null;
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
        require 'core/mailgun.php';
        $message = "<div class=\"alert alert-success\">Your form has been submitted!</div>";
        //header('Location: thanks.php');
    }
    else
    {
        $message = "<div class=\"alert alert-danger\">Your form has errors!</div>";
    }
}

?>