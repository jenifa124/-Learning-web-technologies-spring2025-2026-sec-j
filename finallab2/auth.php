<?php
session_start();


$_SESSION['users']['jenifa'] = [
    'name' => 'jenifa',
    'email' => 'jenifa@gmail.com',
    'gender' => 'Female',
    'dob' => '01/01/2000',
    'password' => '123',
    'picture' => ''
];

$_SESSION['logged_in'] = 'jenifa';
?>