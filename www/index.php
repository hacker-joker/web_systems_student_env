<?php
require_once 'AutoInclude.php';
$includ = new Avto_include();
$includ->Include_all();

echo "start<br>";

$rt = new Test();
$rt->count = 5;
$rt->TestClose();
//$r = Router::getInstance();
//$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

?>