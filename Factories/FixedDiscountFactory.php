<?php

namespace Factories;

use Factories\ICouponFactory;
use FixedAmountDiscountCoupon;

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