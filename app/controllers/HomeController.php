<?php

namespace app\controllers;

use app\Controllers\Controller;

class HomeController extends Controller{
    
    public function index()
    {
        $this->view('home');
    }
}