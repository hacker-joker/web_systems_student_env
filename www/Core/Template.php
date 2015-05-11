<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 12.05.2015
 * Time: 0:23
 */
abstract class Template{
    public $template;
    public $dir;
    public $index;

    function __construct($dir, $index){
        $this->dir = $dir;
        $this->index = $index;
        $config = array(
            'template_path' => array($this->dir.'/view')
        );
        $this->template = new Savant3($config);
    }
    public function add($name,$value){
        $this->template->$name = $value;
    }
    abstract public function Persion();
    public function Render(){
        $this->Persion();
       return $this->template->fetch($this->index);
    }

}
