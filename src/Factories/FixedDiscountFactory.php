<?php

namespace CouponSystem\Factories;

use CouponSystem\Factories\ICouponFactory;
use CouponSystem\Coupons\FixedAmountDiscountCoupon;

class FixedDiscountFactory implements ICouponFactory
{
    private $amount;

    /**
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function createCoupon()
    {
        return new FixedAmountDiscountCoupon($this->amount);
    }
}