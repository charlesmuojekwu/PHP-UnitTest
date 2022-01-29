<?php

/**
 * Product
 *
 * An example product class
 */
class Product
{
    /**
     * Unique identifier
     * @var integer
     */
    public $product_id;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->product_id = rand();
    }
}
