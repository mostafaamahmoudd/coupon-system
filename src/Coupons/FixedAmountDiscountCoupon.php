<?php

namespace Mustafa\CouponSystem\Coupons;

use Mustafa\CouponSystem\Coupons\ICoupon;

class FixedAmountDiscountCoupon implements ICoupon
{
    private $amount;

    /**
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function apply($total)
    {
        return max(0, $total - $this->amount);
    }
}