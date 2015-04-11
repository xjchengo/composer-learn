<?php namespace ComposerLearn;

use Exception;

class People
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->{$key};
        } else {
            throw new Exception('试图访问不存在的方法');
        }
    }
}