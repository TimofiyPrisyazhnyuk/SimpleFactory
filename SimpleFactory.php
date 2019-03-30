<?php

/**
 * Class SimpleFactory
 */
class SimpleFactory
{
    /**
     * @return Bicycle
     */
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
