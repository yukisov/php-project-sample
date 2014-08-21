<?php
//require_once __DIR__.'/../vendor/autoload.php';

use Yuki\Foo;

class FooTest extends PHPUnit_Framework_TestCase
{
  public function testAdd()
  {
    $foo = new Foo;
    $this->assertEquals(10, $foo->add(2, 8));
  }
}
