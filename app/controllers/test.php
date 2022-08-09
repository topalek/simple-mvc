<?php
namespace app\controllers;

use app\core\Controller;

class test extends Controller
{
    public function index()
    {
        $this->layout = 'mat';

        $this->render('index');
    }
}
