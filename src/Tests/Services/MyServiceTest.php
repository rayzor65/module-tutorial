<?php

namespace ModuleTutorial\MyModule\Tests\Services;

use ModuleTutorial\MyModule\Services\MyService;

/**
 * Class MyServiceTest
 * @package ModuleTutorial\MyModule\Tests\Services
 */
class MyServiceTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testDoSomething()
    {

        $myService  = new MyService();

        $this->assertEquals('Done', $myService->doSomething());

    }

}