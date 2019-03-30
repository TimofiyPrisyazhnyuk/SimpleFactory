<?php

namespace Tests;

use SimpleFactory;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class SimpleFactoryTest
 * @package Tests
 */
class SimpleFactoryTest
{
    /**
     * Test Simple Factory
     */
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        die(print_r($bicycle));
    }
}

// Run test.
(new SimpleFactoryTest())->testCanCreateBicycle();