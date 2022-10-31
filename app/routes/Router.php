<?php
namespace app\routes;

class Router
{
    public static function load(string $controller, string $action)
    {

    }
    public static function  routes() : array
    {
        return [
            'get' => [
                '/' => self::load('HomeController','index'),
                '/contact' => self::load('ContactController', 'index')
            ],
            'post' => [
                '/contact' => 'ContactController'
            ],
            'put' => [

            ],
            'delete' => [

            ]
            ];
    }
}