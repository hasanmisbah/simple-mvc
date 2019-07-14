<?php

Class App{
    public static function view($filepath){
        return "views/".$filepath.".php";
    }

    public static function controller($filepath){
        return "controller/".$filepath.".php";
    }

    public static function assets($filepath){
        return "public/".$filepath.".php";
    }
}