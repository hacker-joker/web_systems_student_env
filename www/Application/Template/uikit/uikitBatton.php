<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 17.05.2015
 * Time: 15:30
 */

class uikitButton extends Template{
    private $Button = null;
    function __construct()
    {
        $this->index = "button.tpl.php'";
        parent::__construct(__DIR__,$this->index);
    }
    public function  Persion(){
        $this->Add("label",'777 Заголовок 777');
        $this->Add("name",'15');
        $this->Add("value",'777 Заголовок 777');
        $this->Add("submit",'777 Заголовок 777');
    }

}
