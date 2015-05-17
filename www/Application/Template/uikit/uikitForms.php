<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 17.05.2015
 * Time: 15:31
 */
class uikitForm extends Template{
    function __construct(){
        parent::__construct(__DIR__,'forms.tpl.php');

    }
    public function Persion()
    {
        $this->add('method','post');
        $this->add('action','/home');
        $this->add('label','lable<br>');
        $this->add('fields','field<br>');
        $this->add('errors','Error<br>');

    }
}