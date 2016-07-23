<?php

use MartynBiz\Helpers\String;

class StringFunctionsTest extends PHPUnit_Framework_TestCase
{
    public function test_slugify()
    {
        $result = String\slugify('Hello, my name is Martyn!');

        $this->assertEquals($result, 'hello-my-name-is-martyn');
    }
}
