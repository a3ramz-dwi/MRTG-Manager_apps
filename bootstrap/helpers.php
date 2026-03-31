<?php

function env($key) {
    return getenv($key);
}

function config($key) {
    // The actual implementation depends on your configuration scheme
    return include __DIR__ . '/../config/' . $key . '.php';
}

function url($path) {
    return APP_URL . '/' . $path;
}

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function flash($message) {
    // You may implement a flash messaging system here.
}
