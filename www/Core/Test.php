<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 01.05.2015
 * Time: 13:37
 */
class Test{
    public $count = 0;
    private $count1 = 0;
    public static $count2 = 0;
    private static $count3 = 0;
    function __construct(){
        echo("aaaaa, i run))))<br>");
        $this->TestText();
    }
   public function TestClose(){
       echo("aaaaa, i Close(((((");
       echo($this->count);
    }
    public function TestText(){
        echo("Yse rabotet)))))<br>");
    }
}