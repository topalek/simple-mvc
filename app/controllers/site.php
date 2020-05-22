<?php


use app\core\Controller;

class site extends Controller
{
    public function index($name = '')
    {
        $user = $this->getModel('user');
        $user->name = $name;
        $this->render('index', ['user' => $user]);
    }

    public function test()
    {
        echo json_encode($_SERVER);
    }
}
