<?php
namespace Api\TokenBucket\Tests;

use Api\TokenBucket\Manager;

class TestManager extends Manager
{
    public $data;

    protected function load(string $name)
    {
        return $this->data[$name] ?? false;
    }

    protected function save(string $name, $value)
    {
        $this->data[$name] = $value;
        return true;
    }
}
