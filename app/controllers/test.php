<?php

use app\core\Controller;

class test extends Controller
{
    public function index()
    {
        $this->layout = 'mat';

        $this->render('index');
    }
}
