<?php

namespace app\core;

class Controller
{
    private $_view;
    public $controllerName;
    public $viewPath;
    public $layout;

    public function __construct()
    {
        $this->controllerName = get_class($this);
        $this->viewPath = '../app/views/' . $this->controllerName . '/';
        $this->_view = new View();
    }

    public function getModel($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function getView()
    {
        return $this->_view;
    }

    public function render($view, $params = [])
    {
        echo $this->getView()->render($view, $params, $this);
    }
}
