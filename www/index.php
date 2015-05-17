<?php
require_once 'AutoInclude.php';
$include = new Avto_include();
$include->Include_all();

Theme::setActive(New  uikitTheme());
$page_class = Theme::GetView('Form');
$page = new $page_class($content);
echo $page->Render();
$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
?>