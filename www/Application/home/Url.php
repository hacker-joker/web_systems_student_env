<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 01.05.2015
 * Time: 13:00
 */

$r = Router::getInstance();
$r->get("/", function() {
    print('Welcome to site we navigete the home');
});
$r->get("/room", function() {
    print('Welcome to site we navigete the home');
});
$r->get("/services", function() {
    print('Welcome to site we navigete the home');
});