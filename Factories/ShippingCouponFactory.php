<?php

namespace Factories;

use Factories\ICouponFactory;
use FreeShippingCoupon;

class ShippingCouponFactory implements ICouponFactory
{
    private $shipping;

    /**
     * @param $shipping
     */
    public function __construct($shipping)
    {
        $this->shipping = $shipping;
    }

    public function createCoupon()
    {
        return new FreeShippingCoupon($this->shipping);
    }
}