<?php
session_start();

$_SESSION['users']['jenifa'] = [
    'name' => 'jenifa',
    'password' => '123'
];
$_SESSION['logged_in'] = 'jenifa';
?>
