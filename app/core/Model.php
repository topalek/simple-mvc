<?php
/**
 * Created by topalek
 * Date: 22.05.2020
 * Time: 10:04
 */

namespace app\core;

class Model
{

    public function load($data)
    {
        foreach ($data as $name => $value) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }


}
