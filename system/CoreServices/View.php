<?php
namespace App\System;

class View
{
    
    public static function inject($view){

        // TODO : get view.name@model.name

        $hive = new Scope('config.hive');
        $path = $hive->app_path . "/view/" . $view . ".html";
        $view = file_get_contents($path);
        
        return (new Directive)->trigger($view);
    }
}