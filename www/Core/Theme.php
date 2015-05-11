<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 12.05.2015
 * Time: 0:45
 */
class Theme{
    static protected $active = null;
    static public function setActive($theme) {
        self::$active = $theme;
    }
    static public function GetView($view_name){
        return self::$active->getView($view_name);
    }
}