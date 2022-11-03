<?php
namespace app\routes;

class Router
{
    const CONTROLLER_NAMESPACE = 'app\\controllers';
    public static function load(string $controller, string $method)
    {
        try {
            //verificar se o controller existe
            $controllerNamespace = self::CONTROLLER_NAMESPACE.'\\'.$controller;
            if (!class_exists($controllerNamespace)) {
                throw new \Exception("O Controller {$controller} não existe");
            }

            $controllerInstance = new $controllerNamespace;

            if (!method_exists($controllerInstance, $method)) {
                throw new \Exception("O método {$method} não existe no Controller {$controller}");
            }

            $controllerInstance->$method();

        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
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