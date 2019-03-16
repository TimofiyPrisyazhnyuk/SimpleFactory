<?php

namespace SimpleFactory\Tests;

use SimpleFactory\SimpleFactory;
require __DIR__ . '/../Bicycle.php';
require __DIR__ . '/../SimpleFactory.php';

class SimpleFactoryTest
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        die(print_r($bicycle));
    }
}
(new SimpleFactoryTest())->testCanCreateBicycle();