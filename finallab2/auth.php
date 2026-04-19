<?php
session_start();


if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if (!isset($_SESSION['users']['jenifa'])) {
    $_SESSION['users']['jenifa'] = [
        'name' => 'jenifa',
        'password' => '123'
    ];
}


if (!isset($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = 'jenifa';
}