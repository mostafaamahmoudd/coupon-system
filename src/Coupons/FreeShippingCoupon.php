<?php

namespace Mustafa\CouponSystem\Coupons;

use Mustafa\CouponSystem\Coupons\ICoupon;

class FreeShippingCoupon implements ICoupon
{
    private $shippingCost;

    /**
     * @param $shippingCost
     */
    public function __construct($shippingCost)
    {
        $this->shippingCost = $shippingCost;
    }

    public function apply($total)
    {
        return $total - $this->shippingCost;
    }
}