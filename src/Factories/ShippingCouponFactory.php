<?php

namespace CouponSystem\Factories;

use CouponSystem\Factories\ICouponFactory;
use CouponSystem\Coupons\FreeShippingCoupon;

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