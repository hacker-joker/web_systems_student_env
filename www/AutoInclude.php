<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 01.05.2015
 * Time: 12:57
 */
Class Avto_include{
    public function Include_all(){
        $this->Core();
        $this->Application();
        $this->Template();
    }
    public function LoadForeach($Dir)
    {
        foreach(glob($Dir) as $Name) {
            include_once $Name;
        }
    }
    public function Core()
    {
        $this->LoadForeach("Core/*.php");
    }
    public function Application()
    {
        $this->LoadForeach("Application/*/Url.php");

    }
    public function Template()
    {
        $this->LoadForeach("Core/*/*/*.php");
        $this->LoadForeach("Application/*/*/*.php");
    }
}
?>