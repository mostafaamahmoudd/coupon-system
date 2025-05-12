<?php

namespace Mustafa\CouponSystem\Factories;

use Mustafa\CouponSystem\Factories\ICouponFactory;
use Mustafa\CouponSystem\Coupons\FreeShippingCoupon;

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