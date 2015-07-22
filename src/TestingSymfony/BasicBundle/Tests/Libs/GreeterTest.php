<?php

namespace TestingSymfony\BasicBundle\Tests\Libs;
use TestingSymfony\BasicBundle\Libs\Greeter;

class GreeterTest extends \PHPUnit_Framework_TestCase {
    
    public function testDisplay()
    {
        $greeting = new Greeter();
        $result = $greeting->display("John");
        $expected = "John,you are the coolest person I have ever met";
        $this->assertEquals($expected,$result);
        
    }
    
    
}

