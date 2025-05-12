<?php

namespace Mustafa\CouponSystem\Factories;

use Mustafa\CouponSystem\Factories\ICouponFactory;
use Mustafa\CouponSystem\Coupons\PercentageDiscountCoupon;

class PercentageDiscountFactory implements ICouponFactory
{
    private $percentage;

    /**
     * @param $percentage
     */
    public function __construct($percentage)
    {
        $this->percentage = $percentage;
    }

    public function createCoupon()
    {
        return new PercentageDiscountCoupon($this->percentage);
    }
}