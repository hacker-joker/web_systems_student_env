<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 12.05.2015
 * Time: 0:48
 */

class uikitTheme {
    private $views = array(
        'Page' => 'uikitPage',
        'TextField' => 'uikitTextField',
        'ButtonField' => 'uikitButton',
        'Password' => 'uikitRegField',
        'Form' => 'uikitForm'
    );
    function GetView($view_name) {
        return isset($this->views[$view_name]) ? $this->views[$view_name] : null;
    }
}