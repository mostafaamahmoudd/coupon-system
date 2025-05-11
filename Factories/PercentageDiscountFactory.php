<?php

namespace Factories;

use Factories\ICouponFactory;
use PercentageDiscountCoupon;

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