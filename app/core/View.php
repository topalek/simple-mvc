<?php
/**
 * Created by topalek
 * Date: 22.05.2020
 * Time: 11:08
 */

namespace app\core;

class View
{
    public $layout = 'main';
    public $view = 'index';
    public $controller = 'site';

    public function __construct()
    {
    }

    public function render($view, $params, $controller)
    {
        if (is_array($params) && !empty($params)) {
            extract($params);
        }
        $layout = ($controller->layout) ?? $this->layout;
        $layout = '../app/views/layouts/' . $layout;
        $viewFile = $controller->viewPath . $view;
        $content = $this->renderPhpFile($viewFile, $params);
        $content = $this->renderPhpFile($layout, ['content' => $content]);
        return $content;
    }

    private function renderPhpFile($view, $params)
    {
        if (is_array($params) && !empty($params)) {
            extract($params);
        }
        ob_start();
        try {
            include $view . '.php';
        } catch (\Exception $e) {
            var_dump($view);
        }
        return ob_get_clean();
    }

}
