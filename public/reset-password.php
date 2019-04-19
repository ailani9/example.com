<?php

checkSession();



$meta=[];
$meta['title']="Reset Password";

$content=<<<EOT
<h1>{$meta['title']}</h1>
{$message}
<form method="post" autocomplete="off">
    <div class="form-group">
        <label for="email">Email</label>
        <input 
            class="form-control"
            id="email"
            name="email"
            type="email"
            value="{$valid->userInput('email')}"
        >
        <div class="text text-danger">{$valid->error('email')}</div>
    </div>
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input 
            class="form-control"
            id="first_name"
            name="first_name"
            type="first_name"
            value="{$valid->userInput('first_name')}"
        >
        <div class="text text-danger">{$valid->error('first_name')}</div>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input 
                class="form-control"
                id="last_name"
                name="last_name"
                type="last_name"
                value="{$valid->userInput('last_name')}"
                >
        <div class="text text-danger">{$valid->error('last_name')}</div>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input 
                class="form-control"
                id="password"
                name="password"
                type="password"
                value="{$valid->userInput('password')}"
                >
        <div class="text text-danger">{$valid->error('password')}</div>
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input 
                class="form-control"
                id="confirm_password"
                name="confirm_password"
                type="password"
                value="{$valid->userInput('confirm_password')}"
                >
        <div class="text text-danger">{$valid->error('confirm_password')}</div>
    </div>

    <input type="submit" class="btn btn-primary">
</form>

EOT;

require '../core/layout.php';

