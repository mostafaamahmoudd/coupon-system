<?php

namespace Mustafa\CouponSystem\Factories;

use Mustafa\CouponSystem\Factories\ICouponFactory;
use Mustafa\CouponSystem\Coupons\FixedAmountDiscountCoupon;

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