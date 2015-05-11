<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 12.05.2015
 * Time: 0:50
 */

class uikitPage extends Template{
    function __construct(){
        parent::__construct(__DIR__,'index.tpl.php');

        }
    public function Persion()
    {
        $this->add('title','wwwwwwwww');
        $this->add('world','Эта ХУЙня работает');
    }
}