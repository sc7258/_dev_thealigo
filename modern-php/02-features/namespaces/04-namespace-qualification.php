<?php
namespace My\App;

//error_reporting(E_ALL);
//ini_set("display_errors", 1);

class Foo
{
    public function doSomething()
    {
        $exception = new Exception();
    }
}

$foo = new Foo;
$foo->doSomething();
